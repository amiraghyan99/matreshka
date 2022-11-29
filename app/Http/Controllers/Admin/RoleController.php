<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRoleRequest;
use App\Http\Requests\Admin\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:role list', ['only' => ['index', 'show']]);
        $this->middleware('can:role create', ['only' => ['create', 'store']]);
        $this->middleware('can:role edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:role delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $roles = (new Role)->newQuery();

        if (request()->has('search')) {
            $roles->where('name', 'Like', '%'.request()->input('search').'%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $roles->orderBy($attribute, $sort_order);
        } else {
            $roles->latest();
        }

        $roles = $roles->paginate(5)->onEachSide(2)->appends(request()->query());

        return Inertia::render('Admin/Role/Index', [
            'roles' => $roles,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('role create'),
                'edit' => Auth::user()->can('role edit'),
                'delete' => Auth::user()->can('role delete'),
            ]
        ]);
    }


    public function create()
    {
        $permissions = Permission::all()->pluck("name","id");

        return Inertia::render('Admin/Role/Create', [
            'permissions' => $permissions,
        ]);
    }

    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->validated());

        if (! empty($request->permissions)) {
            $role->givePermissionTo($request->permissions);
        }

        return redirect()->route('role.index')
                        ->with('message', 'Role created successfully.');
    }

    public function show(Role $role)
    {
        $permissions = Permission::all()->pluck("name","id");
        $roleHasPermissions = array_column(json_decode($role->permissions, true), 'id');

        return Inertia::render('Admin/Role/Show', [
            'role' => $role,
            'permissions' => $permissions,
            'roleHasPermissions' => $roleHasPermissions,
        ]);
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all()->pluck("name","id");
        $roleHasPermissions = array_column(json_decode($role->permissions, true), 'id');

        return Inertia::render('Admin/Role/Edit', [
            'role' => $role,
            'permissions' => $permissions,
            'roleHasPermissions' => $roleHasPermissions,
        ]);
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update($request->validated());
        $permissions = $request->get('permissions') ?? [];
        $role->syncPermissions($permissions);

        return redirect()->route('role.index')
                        ->with('message', 'Role updated successfully.');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('role.index')
                        ->with('message', __('Role deleted successfully'));
    }
}
