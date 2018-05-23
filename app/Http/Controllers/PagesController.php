<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\User;
use App\Client;
use App\Project;
use App\Post;
use App\Category;


class PagesController extends Controller
{
   

    public function index(){

        
        $posts = Post::where('status','=','PUBLISHED')->orderBy('id','DESC')->paginate(3);
        $categories = Category::all();
        
        $clients = Client::all();
        $projects = Project::where('featured','=','1')->orderBy('id','DESC')->paginate(4);
        return view ('pages.home',compact('clients','projects','categories','posts'));
    }  


    public function about(){
        $teams = User::all();
        $clients = Client::all();
        return view ('pages.about',compact('clients','teams'));
    }  

    public function blog(){     
        return view ('blog.index');
    }
    public function portfolio(){    
        $projects = Project::all(); 
        return view ('pages.portfolio',compact('projects'));
    }
    public function contact(){     
        return view ('pages.contact');
    }

    public function services(){     
        return view ('pages.services');
    }
    public function comingsoon(){     
        return view ('pages.comingsoon');
    }

    public function show($slug){ 

        $page= Page::findBySlug($slug);
        return view ('pages.show', compact('page'));
    }

}
