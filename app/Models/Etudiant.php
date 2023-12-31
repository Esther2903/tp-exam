<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 
        'prenom',
        'datnais',
        'ville',
        'sexe',
        'option_id'
    ];

    public function option() {
        return $this->belongsTo(Option::class, 'option_id', 'id');
    }
}
