<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progetti extends Model
{
    use HasFactory;

    public function progetto()
{
    return $this->belongsTo(Progetti::class, 'progetto_id');
}

}
