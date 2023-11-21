<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfos extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'address',
        'proffesion',
        'linkedin_url',
        'website_url',
        'picture',
        'biography',
        'user_id',
    ];
}
