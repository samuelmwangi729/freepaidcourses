<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cracks extends Model
{
    protected $fillable=[
        'CrackTitle',
        'Slug',
        'IntroText',
        'Category',
        'Description',
        'FeaturedImage',
    ];
}
