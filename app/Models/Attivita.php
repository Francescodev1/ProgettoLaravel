<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attivita extends Model
{
    use HasFactory;

    public function attivitas()
{
    return $this->hasMany(Attivita::class, 'progetto_id');
}


}
