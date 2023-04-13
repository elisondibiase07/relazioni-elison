<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description',
        'price',
        'img', 
        'user_id',
        'category_id'
    ];
      //! funz di relazione
    //? un prodotto puo  essere collegato ad un tante 

    public function user(){

        return $this->belongsTo(User::class); //* ritorna l'utente collegato al prodotto
    }

    public function category(){
    
        return $this->belongsTo(Category::class); //* ritorna l'utente collegato al prodotto
    }
}
