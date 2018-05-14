<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Client;

class PagesController extends Controller
{
    

    public function index(){
        $clients = Client::all();
        return view ('home',compact('clients'));
    }  


    public function about(){
        return view ('about');
    }  

    public function blog(){     
        return view ('blog.index');
    }
    public function portfolio(){     
        return view ('portfolio');
    }
    public function contact(){     
        return view ('contact');
    }

    public function services(){     
        return view ('services');
    }


}
