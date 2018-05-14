<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
     /* relazione fra categoria e post*/
     public function projectscategory(){
        return $this->belongsTo(ProjectsCategory::class , 'projects_category_id');
      }
}
