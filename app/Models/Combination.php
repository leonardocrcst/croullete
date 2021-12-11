<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{
    use HasFactory;

    protected $fillable = ['disabled_at', 'user', 'name', 'composition'];
    protected $hidden = ['user'];
}
