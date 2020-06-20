<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    public $fillable=[
        'Name',
        'MainName',
        'Status',
    ];
}
