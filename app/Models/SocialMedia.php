<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = ['icon', 'username', 'link', 'platform'];

    public const PLATFORM = ['instagram', 'facebook', 'linkedin', 'twitter'];
}
