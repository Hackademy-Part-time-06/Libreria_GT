<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('category.index', ['categories' => $categories]);
    }

    public function create()
    {

        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {



        Category::create([
            'name' => $request->name,
        ]);



        return redirect()->route('category.index')->with('success','categoria inserito');
    }


    public function show(Category $category) //inietto il Model
    { 
        return view('category.show', compact('category'));
    }
}


