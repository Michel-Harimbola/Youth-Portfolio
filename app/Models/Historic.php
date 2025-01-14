<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Historic extends Model
{
    use HasFactory;
  
    protected $table = 'Historic';
    protected $fillable = ['title', 'description', 'date', 'images', 'location'];
}
