<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerRegistrationRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'employerId',
        'status'
    ];
}
