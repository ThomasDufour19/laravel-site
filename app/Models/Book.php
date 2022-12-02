<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table="books";

    protected $fillable = [
        "name",
        "genre_id",
        "auteur_id"
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class, "genre_id");
    }
    public function auteur()
    {
        return $this->belongsTo( Auteur::class, "auteur_id" );
    }
}
