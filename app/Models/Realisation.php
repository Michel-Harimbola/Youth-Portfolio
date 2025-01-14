<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Realisation extends Model
{
    use HasFactory;
  
    protected $table = 'Realisation';
    protected $fillable = ['title', 'description', 'date', 'images', 'client', 'link'];
}
