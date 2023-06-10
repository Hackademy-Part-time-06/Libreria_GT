<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author_id', 'pages','year','image'];

    public function author() {
        return $this->belongsTo(Author::class);
    }
    
    //Quanti autori può avere un libro? 1. quindi Singolare author

}
