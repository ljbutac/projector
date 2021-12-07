<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $fillable = [
        'lname',
        'fname',
        'mname',
        'age',
        'address',
        'town',
        'province',
        'placeofbirth',
        'dateofbirth',
        'sex',
        'civilstatus',
        'citizenship',
        'occupation',
        'ps',

    ];
   
    use HasFactory;
}
