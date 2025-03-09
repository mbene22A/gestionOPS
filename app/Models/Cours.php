<?php

namespace App\Models;
use App\Models\Professeur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable = ['nom', 'duree', 'professeur_id' ];
    use HasFactory;

    public function professeur(){
        return $this->belongsTo(Professeur::class);
    }
}
