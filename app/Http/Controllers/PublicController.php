<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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

    public function booking () {
        return view('book');
    }

    public function createbooking (Request $request){


        $email = $request->input('email');
        $departuredate = $request->input('departuredate');
        $arrivaldate = $request->input('arrivaldate');
        $message = $request->input('message');

        dd($email);

        // $link = https://www.booking.com/searchresults.it.html?ss=Bari&ssne=Bari&ssne_untouched=Bari&label=gog235jc-1DCAEoggI46AdIFFgDaHGIAQGYARS4ARfIAQzYAQPoAQH4AQKIAgGoAgO4AunK2qIGwAIB0gIkZDkzMzQxZTEtZjEwMi00MTNmLTkzNTItYTFmNThlZWUxOWU32AIE4AIB&aid=397594&lang=it&sb=1&src_elem=sb&src=index&dest_id=-111255&dest_type=city&checkin={{$arrivaldate}}&checkout={{$departuredate}}&group_adults=2&no_rooms=1&group_children=0&sb_travel_purpose=leisure


    }

    public function setLanguage($lang){
        session()->put('locale',$lang);
        return redirect()->back();
    }


}
