<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $fillable=[
        'Name',
        'Status'
    ];
}
