<?php

namespace App\Http\Controllers;

use Dymantic\InstagramFeed\Profile;
use Illuminate\Support\Facades\Storage;
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
                'href' => '#menu',
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
                'image' => $this->getImageUrl('images/original/IMG_3386.JPG'),
            ],
            [
                'title' => __('intro.title'),
                'description' => __('intro.description'),
                'image' => $this->getImageUrl('images/original/Gheviphoto-60.jpg'),
            ],
            [
                'title' => __('intro.title'),
                'description' => __('intro.description'),
                'image' => $this->getImageUrl('images/original/Gheviphoto-23.jpg'),
            ],
        ];

//        Storage::url($item)


        $galleries = $this->getImages('images/original');

//        $videos = getFiles('videos/mov');
        $videos = [];

        $data = compact('socials', 'navigations', 'intros', 'galleries', 'videos');

        return view('index', $data);
    }

    public function getImageUrl($src, $width = null, $height = null): string
    {
        return route('cache-image', [
            'src' => $src,
            'w' => $width,
            'h' => $height
        ]);
    }

    public function getImages($directory): array
    {
        $path = Storage::files($directory);

        return array_map(fn($item) => $this->getImageUrl($item), $path);
    }
}
