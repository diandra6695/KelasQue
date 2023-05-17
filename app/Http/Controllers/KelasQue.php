<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class KelasQue extends Controller
{
    public function landing()
    {
        return view('semangat');
    }

    public function home()
    {
        return view('home');
    }
}
