<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class MediaService
{
    public static function defaultMedia(Model $model, $collection="*")
    {
        $medias = $model->getMedia($collection);
        if (count($medias)) {
            return $medias[0]->getFullUrl();
        } else {
            return "";
        }
    }
}
