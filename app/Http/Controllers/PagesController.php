<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function getIndex()
    {
        //$posts = Post::orderBy('created_at','desc')->limit(3);
        $posts = DB::table('posts')->limit(3)->get();
        return view('pages.welcome',compact('posts'));
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getAbout()
    {
        $first = "Najwa";
        $last = "Trefi";
        $full = $first." ".$last;
      //  $arr['full']= $full;
        $email = "najwa.93.sy@gmail.com";
        return view('pages.about', compact('full','email'));
    }
}
