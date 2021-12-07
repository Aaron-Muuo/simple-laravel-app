<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        return view("home");
    }

    public function blog(){

        $posts = DB::table('posts')->get();

        return view("blog", ["posts"=>$posts]);
        //dd($posts);
    }
}
