<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requiredSkills extends Model
{
    use HasFactory;
    protected $fillable = [
        'jobId',
        'skillId',
    ];
}
