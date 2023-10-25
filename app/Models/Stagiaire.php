<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
   // use HasFactory;
    protected $fillable = ['matricule','nom','prenom','cin','datenaissance','email','tel1','tel2','tel3','filiere_id','status'];

}
