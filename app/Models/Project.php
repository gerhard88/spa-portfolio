<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'color',
        'icon_name'
    ];

    //get Text colours
    public static function getAvailableTextColors()
    {
        $elements = json_decode(
            File::get(resource_path('json/customization.json'))
        );
        return $elements->texts;
    }

    //get Icons colours
    public static function getAvailableIcons()
    {
        $elements = json_decode(
            File::get(resource_path('json/customization.json'))
        );
        return $elements->icons;
    }
}
