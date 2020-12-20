<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileActivity extends Model
{
    protected $table = 'profile_activity';

    protected $fillable = [
        'profile_id',
        'follows',
        'followers',
        'posts'
    ];
}
