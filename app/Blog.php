<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=[
        'BlogTitle',
        'Slug',
        'IntroText',
        'Category',
        'Description',
        'FeaturedImage',
    ];
}
