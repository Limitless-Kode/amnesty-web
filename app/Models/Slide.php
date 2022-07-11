<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'link_text',
        'link',
        'deleted'
    ];

    public static function search($search): \Illuminate\Database\Eloquent\Builder
    {
        return empty($search) ? static::query() : static::query()
            ->where('slides.title','like','%'.$search.'%');
    }
}
