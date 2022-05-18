<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    static public function generateSlug($str) {
        $originalSlug = Str::of($str)->slug('-');
        $slug = $originalSlug;
        $i = 1;
        while (self::where('slug', $slug)->first()) {
            $slug = "$originalSlug-$i";
            $i++;
        }
        return $slug;
    }

}
