<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // identifies what values can be manipulated
    protected $fillable = [
        'title', 'description'
    ];

    // guarded does the opposite, specifies what CANT be changed

    // security procedure
}