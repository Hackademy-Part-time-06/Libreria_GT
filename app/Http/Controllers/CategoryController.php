<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->only('create','edit');
    }
    
    
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', ['categories' => $categories]);
    }

    public function create()
    {

        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success','categoria inserita');
    }


    public function show(Category $category) //inietto il Model
    { 
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $categories)
    {
        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('categories.index')->with('success','Modifica avvenuta con successo');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Cancellazione avvenuta con successo!');

    }

}



