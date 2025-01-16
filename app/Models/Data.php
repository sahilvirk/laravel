<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'data';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'name',
       
    ];

    
}
