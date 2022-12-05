<?php

namespace App\Http\Controllers;

use App\Models\Intro;
use Illuminate\View\View;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $socials = [
            'tiktok' => [
                'href' => 'https://www.tiktok.com/@matreshkashowclub',
                'iconClass' => 'fa-brands fa-tiktok',
                'target' => '_blank'
            ],
            'facebook' => [
                'href' => 'https://www.facebook.com/matreshkashowclub',
                'iconClass' => 'fa-brands fa-facebook',
                'target' => '_blank'
            ],
            'instagram' => [
                'href' => 'https://www.instagram.com/matreshkashowclub/',
                'iconClass' => 'fa-brands fa-instagram',
                'target' => '_blank'
            ],
            'telegram' => [
                'href' => 'https://t.me/matreshkashowclub',
                'iconClass' => 'fa-brands fa-telegram',
                'target' => '_blank'
            ],
            'phone' => [
                'href' => 'tel:+37400000000',
                'iconClass' => 'fa-solid fa-phone',
                'target' => '_self'
            ],
        ];
        $navigation = [
            'menu' => [
                'href' => '#',
                'text' => 'Menu',
            ],
            'gallery' => [
                'href' => '#galery',
                'text' => 'Gallery',
            ],
            'videos' => [
                'href' => '#videos',
                'text' => 'Videos',
            ],
            'vacancies' => [
                'href' => '#vacancies',
                'text' => '#vacancies',
            ],

        ];

        $intros = Intro::actives()->get();

        $welcome_to_our_club = [];
        $about_our_club = [];
        $galery = [];

        $data = compact('socials', 'navigation');
        return view('index', $data);
//        return Inertia::render('Welcome/Welcome', [
//            'canLogin' => Route::has('login'),
//            'canRegister' => Route::has('register'),
//            'laravelVersion' => Application::VERSION,
//            'phpVersion' => PHP_VERSION,
//        ]);
    }
}
