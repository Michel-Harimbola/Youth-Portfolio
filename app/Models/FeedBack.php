<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeedBack extends Model
{
    use HasFactory;

    protected $table = 'FeedBack';
    protected $fillable = ['description', 'email', 'posts'];
}
