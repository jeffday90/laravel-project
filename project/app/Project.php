<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // identifies what fields can be filled in for this model
    protected $fillable = [
        'title', 'description'
    ];

    // guarded does the opposite, specifies what CANT be changed

    // security procedure

    public function tasks() 
    {
        // return the tasks associated with said project
        return $this->hasMany(Task::class);
    }
}