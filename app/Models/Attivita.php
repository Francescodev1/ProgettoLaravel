<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attivita extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descrizione',
        'progetto_id',
        // Aggiungi qui altri campi che vuoi siano assegnabili in massa
    ];

    public function progetto()
    {
        return $this->belongsTo(Progetti::class, 'progetto_id');
    } 
}