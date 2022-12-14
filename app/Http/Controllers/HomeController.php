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
                'image' => $this->getImageUrl('images/original/IMG_3386.JPG', 10),
                'image-large' => $this->getImageUrl('images/original/IMG_3386.JPG', 90, 1280,),
            ],
            [
                'title' => __('intro.title'),
                'description' => __('intro.description'),
                'image' => $this->getImageUrl('images/original/Gheviphoto-60.jpg', 10),
                'image-large' => $this->getImageUrl('images/original/Gheviphoto-60.jpg', 90, 1280, 910),
            ],
            [
                'title' => __('intro.title'),
                'description' => __('intro.description'),
                'image' => $this->getImageUrl('images/original/Gheviphoto-23.jpg', 10),
                'image-large' => $this->getImageUrl('images/original/Gheviphoto-23.jpg', 90, 1280, 910),
            ],
        ];

//        Storage::url($item)


        $galleries = $this->getImages('images/original');


//        $videos = getFiles('videos/mov');
        $videos = [];

        $data = compact('socials', 'navigations', 'intros', 'galleries', 'videos');

        return view('index', $data);
    }

    public function getImageUrl(string $src, int $quantity = 90, int $width = null, int $height = null): string
    {
        return route('cache-image', [
            'src' => $src,
            'quantity' => $quantity,
            'w' => $width,
            'h' => $height
        ]);
    }

    public function getImages($directory): array
    {
        $path = Storage::files($directory);

        return array_map(fn($item) => [
            'min' => $this->getImageUrl($item, 100, 500),
            'max' => $this->getImageUrl($item, 100),
        ], $path);
    }
}
