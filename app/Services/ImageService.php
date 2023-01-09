<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    public function getImages(string $directory, ?int $width = null, int $quantity = 100, ?int $count = null): array
    {
        $paths = Storage::files($directory);

        return $this->getSlice(
            array_map(fn ($item) => [
                'min' => $this->getImageUrl($item, $width),
                'max' => $this->getImageUrl($item),
            ], $paths),
            $count
        );
    }

    public function createImage(Request $request)
    {
        dd($request->allFiles());
    }

    private function getImageUrl(string $src, ?int $width = null, ?int $quantity = 100): string
    {
        return route('image-service', [
            'src' => $src,
            'quantity' => $quantity,
            'w' => $width,
        ]);
    }

    private function getSlice(array $array, ?int $count = null): array
    {
        return array_slice($array, 0, $count);
    }
}
