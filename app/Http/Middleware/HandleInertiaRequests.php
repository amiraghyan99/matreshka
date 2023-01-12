<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Symfony\Component\HttpFoundation\Response;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    const ADMIN_PREFIX_LIST = [
        'admin',
        'auth',
    ];

    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'frontend';

    /**
     * @param  Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @param  Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user()?->only('id', 'name'),
            ],
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
            'flash' => [
                'message' => fn () => $request->session()->get('message'),
            ],
            'viewMenu' => [
                'permission' => $request->user()?->can('permission list'),
                'role' => $request->user()?->can('role list'),
                'user' => $request->user()?->can('user list'),
                'intro' => $request->user()?->can('intro list'),
                'gallery' => $request->user()?->can('gallery list'),
            ],
        ]);
    }

    /**
     * @param  Request  $request
     * @param  Closure  $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (in_array($request->route()->getPrefix(), self::ADMIN_PREFIX_LIST)) {
            $this->rootView = 'app';
        }

        return parent::handle($request, $next);
    }
}
