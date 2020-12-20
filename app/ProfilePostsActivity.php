<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilePostsActivity extends Model
{
    protected $table = 'profile_posts_activity';

    protected $fillable = [
        'profile_id',
        'type',
        'instagram_id',
        'create_date',
        'link',
        'image_url',
        'video_url',
        'content',
        'count_likes',
        'count_comments',
        'location',
    ];
}
