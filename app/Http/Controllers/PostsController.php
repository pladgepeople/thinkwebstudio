<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;


class PostsController extends Controller
{
   
public function index() {
    $titolo = 'blog';
    $categories = Category::take(3)->orderBy('id','DESC')->get();
    $posts = Post::where('status','=','PUBLISHED')->orderBy('id','DESC')->paginate(2);
    $cats = Category::take(3)->orderBy('id','ASC')->get();
    return view('blog.index',compact('titolo','posts','categories','cats'));
}

  public function show($slug){
    $titolo = 'Blog';
    $post = Post::findBySlug($slug);
    $cats = Category::take(3)->orderBy('id','DESC')->get();
    $categories = Category::all();

    $relatedposts = Post::where('status','=','PUBLISHED')->orderBy('id','DESC')->paginate(3);

    $archives = Post::selectRaw('year(created_at) year , monthname(created_at) month, count(*) published')
              ->groupBy('year','month')
              ->orderByRaw('min(created_at)')
              ->get()
              ->toArray();
        return view('blog.show',compact('post','titolo','archives','cats','categories','relatedposts'));

}
  public function categorie($category_id){


    $cats = Category::take(3)->orderBy('id','DESC')->get();
    $posts = Post::where('category_id','=',$category_id)->paginate(9);
    $titolo = 'categorie';
    return view('blog.index',compact('titolo','posts','cats'));

  }

  public function xautore($author_id){


    $cats = Category::take(3)->orderBy('id','DESC')->get();
    $posts = Post::where('author_id','=',$author_id)->paginate(9);
    $titolo = 'per autore';
    return view('blog.index',compact('titolo','posts','cats'));

  }



}
