<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;

class AuthorController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->only('create','edit');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorRequest $request)
    {
        Author::create([
            'name'=> $request->input('name'),
            'surname'=> $request->input('surname'),
            'birthday'=> $request->birthday,
        ]);

        return redirect()->route('authors.index')->with('success','Creazione avvenuta con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorRequest $request, Author $author)
    {
        Author::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'birthday' => $request->birthday,
        ]);

        return redirect()->route('authors.index')->with('success','Modifica avvenuta con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Cancellazione avvenuta con successo!');

    }
}
