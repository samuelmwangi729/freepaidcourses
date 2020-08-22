<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $fillable=[
        'Title',
        'Slug',
        'IntroText',
        'Category',
        'Description',
        'FeaturedImage',
    ];
}
