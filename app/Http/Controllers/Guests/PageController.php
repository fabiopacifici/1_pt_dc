<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('guests.home');
    }


    public function characters()
    {
        return 'Characters';
    }


    public function movies()
    {
        return 'Movies';
    }


    public function tv()
    {
        return 'Tv';
    }


    public function games()
    {
        return 'Games';
    }


    public function collectibles()
    {
        return 'Collectibles';
    }

    public function fans()
    {
        return 'Fans';
    }

    public function video()
    {
        return 'Video';
    }

    public function news()
    {
        return 'news';
    }

    public function shop()
    {
        return 'shop';
    }
}
