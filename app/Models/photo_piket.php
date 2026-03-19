<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo_piket extends Model
{
    use HasFactory;

    protected $fillable = ['photo'];

    protected $casts = ['expired_at' => 'datetime'];
}
