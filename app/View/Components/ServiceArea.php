<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceArea extends Component
{
    public function __construct(public array $services)
    {
    }

    public function svgIcon(string $component): string
    {
        return 'svg-icons.'.$component;
    }

    public function render()
    {
        return view('components.service-area');
    }
}
