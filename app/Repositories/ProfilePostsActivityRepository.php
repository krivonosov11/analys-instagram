<?php

namespace App\Repositories;

use App\ProfilePostsActivity;
use Carbon\Carbon;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class ProfilePostsActivityRepository.
 */
class ProfilePostsActivityRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return ProfilePostsActivity::class;
    }

    public function getByProfileIdAndTime(int $profile_id)
    {
        return $this->newQuery()->where('profile_id', $profile_id)->where('created_at', Carbon::now()->format('Y-m-d') . ' 00:00:00', '>=')->get();
    }

    public function getBestPost(int $profile_id)
    {
        return $this->newQuery()->where('profile_id', $profile_id)->orderBy('count_likes', 'DESC')->first();
    }

    public function getLastPosts(int $profile_id)
    {
        return $this->newQuery()->where('profile_id', $profile_id)->get()->sortByDesc('create_date')->slice(0, 4);
    }

    public function getCountItems(int $profile_id, string $item)
    {
        return ProfilePostsActivity::query()->where('profile_id', $profile_id)->groupBy('created_at')->sum($item);
    }

}
