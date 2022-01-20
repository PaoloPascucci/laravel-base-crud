<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //con validazione
        $validate_data = $request->validate([
            'title'=>'required | unique:comics',
            'description'=>'nullable',
            'thumb'=>'nullable',
            'price'=>'nullable',
            'series'=>'nullable'
        ]);
        Comic::create($validate_data);

        // //senza validazione
        // $comic = new Comic();
        // $comic->title = $request->title;
        // $comic->description = $request->description;
        // $comic->thumb = $request->thumb;
        // $comic->price = $request->price;
        // $comic->series = $request->series;

        // $comic->save();
        
        return redirect()->route('comics');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
       $validate_data = $request->validate([
            'title'=>'required |max:255',
            'description'=>'nullable',
            'thumb'=>'nullable',
            'price'=>'nullable',
            'series'=>'nullable'
        ]);
        $comic->update($validate_data);
        return redirect()->route('comics')->with('message', 'Hai modificato un fumetto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics')->with('message', 'Hai eliminato un fumetto');
    }
}
