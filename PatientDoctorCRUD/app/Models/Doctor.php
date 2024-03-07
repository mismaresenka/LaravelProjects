<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['DoctorID', 'Firstname', 'LastName','Sex', 'Specialization', 'BirthDate', 
    'Address','ContactNumber',];
}
