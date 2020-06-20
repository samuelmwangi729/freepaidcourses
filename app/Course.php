<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $fillable=[
        'CourseTitle',
        'slug',
        'Instructor',
        'Category',
        'Rating',
        'Students',
        'CourseLink',
        'Prerequisites',
        'Description',
        'CourseBanner',
        'Status'
    ];
}
