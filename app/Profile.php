<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'instagram_id',
        'picture',
        'name',
        'full_name',
        'profile_url',
        'biography',
    ];
}
