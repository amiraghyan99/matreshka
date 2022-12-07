<?php

namespace App\Http\Controllers;

use App\Models\Intro;
use Dymantic\InstagramFeed\Profile;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __invoke($loacle = null)
    {
//        $profile = Profile::for('gev99');
//        return $profile->getInstagramAuthUrl();

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
        $navigations = [

            'gallery' => [
                'href' => '#gallery',
                'text' => trans('menu.gallery'),
            ],
            'videos' => [
                'href' => '#videos',
                'text' => trans('menu.videos'),
            ],
            'menu' => [
                'href' => '#',
                'text' => trans('menu.crazy-menu'),
            ],
            'vacancies' => [
                'href' => '#vacancies',
                'text' => trans('menu.vacancies'),
            ],

        ];
        $contacts = [
            'opening_days' => [
                ['day' => 'Monday-Friday', 'time' => '8.00 to 18.00'],
                ['day' => 'Saturday', 'time' => '9.00 to 18.00'],
                ['day' => 'Sunday', 'time' => '10.00 to 16.00'],
            ],
            'address' => 'House No, Road No, East Road, NY, USA2',

        ];
        $paths = File::glob(public_path('assets/images/webp').'/*.webp');
        $galleries = array_map(fn($item) => url(str_replace(public_path(), '', $item)), $paths );
//
//        $intros = Intro::actives()->get();
//
//        $welcome_to_our_club = [];
//        $about_our_club = [];
//        $galery = [];

        $data = compact('socials', 'navigations', 'contacts', 'galleries');
        return view('welcome', $data);
//        return Inertia::render('Welcome/Welcome', [
//            'canLogin' => Route::has('login'),
//            'canRegister' => Route::has('register'),
//            'laravelVersion' => Application::VERSION,
//            'phpVersion' => PHP_VERSION,
//        ]);
    }
}
