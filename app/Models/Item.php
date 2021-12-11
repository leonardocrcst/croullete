<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'disabled_at',
        'user',
        'part',
        'photo',
        'style'
    ];

    protected $hidden = ['user'];
}
