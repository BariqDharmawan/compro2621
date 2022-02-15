<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'desc', 'review_at', 'avatar'];
    protected $casts = [
        'review_at' => 'datetime',
    ];

    public $timestamps = false;
}
