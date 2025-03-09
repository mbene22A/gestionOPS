<?php

namespace App\Models;
use App\Models\Classe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    protected $fillable = ['nom', 'adresse', 'contact', 'nbre_classes' ];
    use HasFactory;

    public function classes(){
        return $this->hasMany(Classe::class);
    }
}
