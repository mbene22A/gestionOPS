<?php

namespace App\Models;
use App\Models\Classe;
use App\Models\Cours;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planing extends Model
{

    protected $fillable = ['date_debut', 'date_fin', 'classe_id', 'cours_id' ];
    use HasFactory;

    public function classe(){
        return $this->belongsTo(Classe::class);
    }

    public function cours(){
        return $this->belongsTo(cours::class);
    }

}
