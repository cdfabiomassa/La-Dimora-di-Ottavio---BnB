<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage () {
        return view('welcome');
    }

    public function about () {
        return view('about');
    }

    public function booknow () {
        return view('booknow');
    }

    public function rooms () {
        return view('rooms');
    }


}
