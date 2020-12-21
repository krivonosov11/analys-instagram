<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProfileActivity
 * @package App
 *
 * @property int $profile_id
 * @property int $follows
 * @property int $followers
 * @property int $posts
 */
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
