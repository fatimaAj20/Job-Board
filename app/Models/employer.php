<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId',
        'websiteLink',
        'description',
        'location',
        'active',
        'logo',
        'registrationNumber',
        'lebanonCreftificateOfIncorporation'
    ];
}
