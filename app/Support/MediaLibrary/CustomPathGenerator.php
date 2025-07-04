<?php

namespace App\Support\MediaLibrary;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class CustomPathGenerator implements PathGenerator
{
    public function getPath(Media $media): string
    {
        $prefix = config('media-library.prefix', '');
        $folder = str($media->collection_name)->replace('_', '-')->plural();

        return $prefix === ''
            ? "{$folder}/{$media->getKey()}/"
            : "{$prefix}/{$folder}/{$media->getKey()}/";
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media).'conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media).'sizes/';
    }
}
