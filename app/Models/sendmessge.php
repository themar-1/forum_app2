<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sendmessge extends Model
{
  
protected $fillable = ['email', 'title', 'name', 'text','status'];

}
