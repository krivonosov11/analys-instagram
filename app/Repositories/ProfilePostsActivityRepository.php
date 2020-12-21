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
        return $this->query->where('profile_id', $profile_id)->where('created_at', '>=',Carbon::now()->format('Y-m-d').' 00:00:00')->first();
    }
}
