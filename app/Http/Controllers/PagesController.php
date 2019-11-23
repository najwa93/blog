<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('pages.welcome');
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
