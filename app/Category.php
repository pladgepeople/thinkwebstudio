<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /* mette in relazione una categoria con tanti post*/
    public function posts(){
        return $this->hasMany(Post::class);
     }
}
