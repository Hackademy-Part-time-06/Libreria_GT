<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->only('create','edit');
    }

    public function index()
    {
        $books = Book::all();  //ottiene tutti i record presenti nella tabella books

        return view('book.index', ['books' => $books]);
    }

    public function create()
    {

        $authors = Author::all();
        return view('book.create', compact('authors'));
    }

    public function store(BookRequest $request)
    {

        $path_image='';

        if($request->hasFile('image') && $request -> file('image')->isValid()) { //se c'è un immagine, e questa è valida
          $file_name = $request->file('image') -> getClientOriginalName(); //dammi il nome originale inserito da utente
          $path_image = $request->file('image') -> storeAs('public/images/cover', $file_name); //crea la cartella se non esiste in modo automatico
                }
        


        //metodo php per salvare i dati

        /* $book = new Book();
        $book->title = 'Il Paradiso degli Orchi';
        $book->author = 'Pennac';
        $book->pages = '329';

        $book->save(); */

        //metodo nuovo e più bello, nel caso in cui le scrivo io manualmente

        /*  Book::create(
            ['title' => 'Il Paradiso degli Orchi',
             'author' => 'Pennac',
             'pages' => '329',]
        ); */

        //metodo nuovo ma applicato sulla richiesta dell'utente

        Book::create([
            'title' => $request->title,
            'author_id' => $request->author_id,
            'pages' => $request->pages,
            'year' => $request->year,
            'image' => $path_image,
        ]);


        return redirect()->route('book.index')->with('success','libro inserito');
    }


    public function show($id)
    {

     $book = Book::find($id);
     if(!$book) {
        abort(404);
     }

        return view('book.show', ['book' => $book]);
    }

    public function edit(Book $book) {

        $authors = Author::all();

        return view('book.edit', ['book'=> $book] , ['authors' => $authors]);
    }

    public function update(BookRequest $request, Book $book) {
        
        $path_image = $book->image; //se c'è mi prendi quella vecchia

        if ($request->HasFile('image') && $request->file('image')->isValid()) {
            $path_name = $request->file('image') -> getClientOriginalName();
            $path_image = $request->file('image') -> storeAs('public\/image', $path_name);
        }

        $book->update([ //è come il create solo che appunto dobbiamo modificare i campi
            'title' => $request->title,
            'author' => $request->author,
            'pages' => $request->pages,
            'year' => $request->year,
            'image' => $path_image
        ]);

        return redirect()->route('book.index')->with('success', 'Modifica avvenuta con successo!');
    }

    public function destroy(Book $book)
    { 
        $book -> delete();
        return redirect()->route('book.index')->with('success', 'Cancellazione avvenuta con successo!');

    }

}