<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seeker extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId',
        'birthday',
        'location',
        'profile_picture',
        'resume',

    ];
}
