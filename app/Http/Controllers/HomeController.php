<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
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
                'href' => 'tel:+37455338848',
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
                //                'image' => $this->getImageUrl('images/original/IMG_3386.JPG', 10),
                'image' => $this->getImageUrl('images/original/IMG_3386.JPG', 100, 1280),
            ],
            [
                'title' => __('intro.title'),
                'description' => __('intro.description'),
                //                'image' => $this->getImageUrl('images/original/Gheviphoto-60.jpg', 10),
                'image' => $this->getImageUrl('images/original/Gheviphoto-60.jpg', 100, 1280, 910),
            ],
            [
                'title' => __('intro.title'),
                'description' => __('intro.description'),
                //                'image' => $this->getImageUrl('images/original/Gheviphoto-23.jpg', 10),
                'image' => $this->getImageUrl('images/original/Gheviphoto-23.jpg', 100, 1280, 910),
            ],
        ];

        $services = [
            [
                'image' => $this->getImageUrl('images/original/Gheviphoto-13.jpg', 100, 400),
                'title' => __('main.section.welcome.card.hookah.title'),
                'desc' => __('main.section.welcome.card.hookah.desc'),
                'id' => 'hookah',
            ],
            [
                'image' => $this->getImageUrl('images/original/Gheviphoto-23.jpg', 100, 400),
                'title' => __('main.section.welcome.card.drink_bar.title'),
                'desc' => __('main.section.welcome.card.drink_bar.desc'),
                'id' => 'drink-bar',
            ],
            [
                'image' => $this->getImageUrl('images/original/Gheviphoto-60.jpg', 100, 400),
                'title' => __('main.section.welcome.card.dance.title'),
                'desc' => __('main.section.welcome.card.dance.desc'),
                'id' => 'dancer',
            ],

        ];

//        $galleries = $this->getImages('images/original');
//
//        $galleries = [];
//        $images = Gallery::with('media')->get();
//
//
//        foreach ($images as $image) {
//            $galleries[] = $image?->getFirstMedia('gallery');
//        }

        $galleries = Gallery::all();

        $videos = $this->getVideos('videos/mp4');

        $data = compact('socials', 'navigations', 'intros', 'services', 'galleries', 'videos');

        return view('index', $data);
    }

    private function getImages(string $directory, ?int $count = null): array
    {
        $paths = Storage::files($directory);

        return $this->getFirstItems(
            array_map(fn ($item) => [
                'min' => $this->getImageUrl($item, 100, 500),
                'max' => $this->getImageUrl($item, 100),
            ], $paths),
            $count
        );
    }

    private function getImageUrl(string $src, int $quantity = 90, int $width = null, int $height = null): string
    {
        return route('image-service', [
            'src' => $src,
            'quantity' => $quantity,
            'w' => $width,
            'h' => $height,
        ]);
    }

    private function getVideos(string $directory): array
    {
        $paths = Storage::files($directory);

        return array_map(fn ($item) => Storage::url($item), $paths);
    }

    private function getFirstItems(array $array, ?int $count = null): array
    {
        return array_slice($array, 0, $count);
    }
}
