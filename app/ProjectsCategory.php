<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectsCategory extends Model
{
    public function projects(){
        return $this->hasMany(Project::class);
     }
}
