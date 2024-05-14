<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Comic::all());
        return view('admin.comics.index', ['comics' => Comic::orderByDesc('id')->paginate(12)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        // validate data
        /*  $val_data = $request->validate([
            'title' => 'required|min:1|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'series' => 'nullable|min:2|max:50',
            'type' => 'nullable|min:2|max:50',
            'sale_date' => 'nullable',
            'price' => 'nullable'
        ]); */
        $val_data = $this->validation($request->all());

        //dd($val_data);
        // create the instance
        Comic::create($val_data);
        // redirect to a get route
        return to_route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //dd($request->all());

        //validate
        /* $val_data = $request->validate([
            'title' => 'required|min:1|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'series' => 'nullable|min:2|max:50',
            'type' => 'nullable|min:2|max:50',
            'sale_date' => 'nullable',
            'price' => 'nullable'
        ]); */
        $val_data = $this->validation($request->all());
        //dd($val_data);
        // update
        $comic->update($val_data);

        // redirect
        return to_route('admin.comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('admin.comics.index');
    }





    // Validation method

    private function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|min:1|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'series' => 'nullable|min:2|max:50',
            'type' => 'nullable|min:2|max:50',
            'sale_date' => 'nullable',
            'price' => 'nullable'
        ], [
            // custom validation messages here
        ])->validate();

        return $validator;
    }
}
