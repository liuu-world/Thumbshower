<?php

namespace GregBrown\ThumbnailServer;
use Illuminate\Support\Facades\File;

class ThumbnailServer
{
    public function thumb($path,$type,$size)
    {
        if (File::exists("/storage/public/{$type}/{$size}/" . $path))
            return url("/storage/public/{$type}/{$size}/" . $path);
        else
            return url("https://via.placeholder.com/400");
    }
}
