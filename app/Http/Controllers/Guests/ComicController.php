<?php

namespace App\Http\Controllers\Guests;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Comic::all());
        return view('guests.comics.index', ['comics' => Comic::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('guests.comics.show', compact('comic'));
    }
}
