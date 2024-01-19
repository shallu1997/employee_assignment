<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'dob', 'salary', 'joining_date', 'relieving_date', 'contact_number', 'status',
        // Add any other attributes you want to be fillable here
    ];
}
