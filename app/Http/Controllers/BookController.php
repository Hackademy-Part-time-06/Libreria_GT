<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {


        //mi valida i dati, se sono tutto ok continua
        $request->validate([
            "title" => "required|string",
            "pages" => "required|numeric",
            "author" => "required",
            "year" => "required",
        ]);


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
