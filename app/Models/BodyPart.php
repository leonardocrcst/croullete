<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyPart extends Model
{
    use HasFactory;

    protected $fillable = ['disabled_at', 'name'];
}
