<?php

namespace App\Models;
use App\Models\Etablissement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = ['nom', 'niveau', 'effectif', 'etablissement_id' ];
    use HasFactory;

    public function etablissement(){
        return $this->belongsTo(Etablissement::class, 'etablissement_id');
    }
}
