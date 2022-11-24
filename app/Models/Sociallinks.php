<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sociallinks extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'email',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
    ];
}
