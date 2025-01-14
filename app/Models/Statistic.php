<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $table = 'Statistic';
    protected $fillable = ['Training_nbr', 'Student_nbr', 'activitie_nbr', 'Certified_training'];
}


