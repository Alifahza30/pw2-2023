<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Countrie;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $movies = Movie::all();

       return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        $countries = Countrie::all();

        return view('movies.create', compact('genres', 'countries'));   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'synopsis' => 'required',
            'release_date' => 'required|date',
            'countries_id' => 'required|integer',
            'rating' => 'required|numeric',
        ]);
        
        Movie::create($validatedData);
        
        return redirect('/movies')->with('success', 'Movie added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        $countries = Countrie::all();

        return view('movies.edit', compact('movie', 'genres', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'synopsis' => 'required',
            'release_date' => 'required|date',
            'countries_id' => 'required|integer',
            'rating' => 'required|numeric',
        ]);
    
        $movie->update($validatedData);
    
        return redirect('/movies')->with('success', 'Movie updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect('/movies')->with('success', 'Movie deleted successfully!');
    }
}
