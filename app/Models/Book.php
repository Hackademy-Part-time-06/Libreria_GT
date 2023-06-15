<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author_id', 'user_id', 'pages','year','image'];

    public function author() {
        return $this->belongsTo(Author::class);
    }
    
    //Quanti autori può avere un libro? 1. quindi Singolare author

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories() { 
        return $this->BelongsToMany(Category::class);
    }


}
