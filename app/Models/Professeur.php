<?php

namespace App\Models;
use App\Models\Cours;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'specialite' ];
    use HasFactory;

    public function cours(){
        return $this->hasMany(Cours::class);
    }
}
