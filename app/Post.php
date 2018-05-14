<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        /* relazione fra autore e post*/
        public function author(){
            return $this->belongsTo(User::class,'author_id');
          }
      
          /* funzione per cercare un post tramite lo slug*/
          public static function findBySlug($slug){
            return static::where('slug', $slug)->first();
          }
      
          /* relazione fra categoria e post*/
          public function category(){
            return $this->belongsTo(Category::class , 'category_id');
          }
}
