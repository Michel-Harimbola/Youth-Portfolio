<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{
    use HasFactory;
  
    protected $table = 'Donation';
    protected $fillable = ['title', 'description', 'amount'];
}
