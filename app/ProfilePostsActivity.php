<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProfilePostsActivity
 * @package App
 *
 * @property int $profile_id
 * @property string $type
 * @property int $instagram_id
 * @property string $create_date
 * @property string $link
 * @property string $image_url
 * @property string $video_url
 * @property string $content
 * @property int $count_likes
 * @property int $count_comments
 * @property string $location
 */
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
