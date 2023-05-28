<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('book.index', ['books' => $books]);
    }

    public function create()
    {

        return view('book.create');
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
            'author' => $request->author,
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
}
