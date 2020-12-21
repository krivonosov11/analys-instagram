<?php

namespace App;

use App\Repositories\ProfileActivityRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Profile
 * @package App
 *
 * @property int $instagram_id
 * @property string $picture
 * @property string $name
 * @property string $full_name
 * @property string $profile_url
 * @property string $biography
 *
 * @property ProfileActivity[] $activities;
 * @property ProfilePostsActivity[] $activityPosts;
 */
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

    public function activities()
    {
        return $this->hasMany(ProfileActivityRepository::class);
    }

    public function activityPosts()
    {
        return $this->hasMany(ProfilePostsActivity::class);
    }
}
