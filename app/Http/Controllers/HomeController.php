<?php

namespace App\Http\Controllers;

use Dymantic\InstagramFeed\Profile;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
//        $profile = Profile::for('gev99');
//        return $profile->getInstagramAuthUrl();

        $socials = [
            'tiktok' => [
                'href' => 'https://www.tiktok.com/@matreshkashowclub',
                'iconClass' => 'fa-brands fa-tiktok',
                'target' => '_blank',
            ],
            'facebook' => [
                'href' => 'https://www.facebook.com/matreshkashowclub',
                'iconClass' => 'fa-brands fa-facebook',
                'target' => '_blank',
            ],
            'instagram' => [
                'href' => 'https://www.instagram.com/matreshkashowclub/',
                'iconClass' => 'fa-brands fa-instagram',
                'target' => '_blank',
            ],
            'telegram' => [
                'href' => 'https://t.me/matreshkashowclub',
                'iconClass' => 'fa-brands fa-telegram',
                'target' => '_blank',
            ],
            'phone' => [
                'href' => 'tel:+37400000000',
                'iconClass' => 'fa-solid fa-phone',
                'target' => '_self',
            ],
        ];

        $navigations = [
            'gallery' => [
                'href' => '#gallery',
                'text' => __('menu.gallery'),
            ],
            'videos' => [
                'href' => '#videos',
                'text' => __('menu.videos'),
            ],
            'menu' => [
                'href' => '#',
                'text' => __('menu.crazy-menu'),
            ],
            'vacancies' => [
                'href' => '#vacancies',
                'text' => __('menu.vacancies'),
            ],
        ];
        $intros = [
            [
                'title' => __('intro.title'),
                'description' => __('intro.description'),
                'image' => 'assets/images/webp/IMG_3386.webp',
            ],
            [
                'title' => __('intro.title'),
                'description' => __('intro.description'),
                'image' => 'assets/images/webp/Gheviphoto-137.webp',
            ],
            [
                'title' => __('intro.title'),
                'description' => __('intro.description'),
                'image' => 'assets/images/webp/Gheviphoto-23.webp',
            ],
        ];

        $gallery_path = File::glob(public_path('assets/images/webp').'/*.webp');
        $galleries = array_map(fn ($item) => url(str_replace(public_path(), '', $item)), $gallery_path);

        $video_path = File::glob(public_path('assets/videos').'/*.webm');
        $videos = array_map(fn ($item) => url(str_replace(public_path(), '', $item)), $video_path);


        $data = compact('socials', 'navigations', 'intros', 'galleries' , 'videos');

        return view('welcome', $data);
    }
}
