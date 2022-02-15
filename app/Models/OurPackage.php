<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurPackage extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'harga_lama', 'harga_baru', 'deskripsi'];
}
