<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    use HasFactory;
    protected $fillable = [
        'stagiaire_id', 
        'entreprise_id',
        'status',
    ];
}
