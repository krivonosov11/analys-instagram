<?php

namespace App\Repositories;

use App\ProfileActivity;
use Carbon\Carbon;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class ProfileActivityRepository.
 */
class ProfileActivityRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return ProfileActivity::class;
    }

    public function getByProfileIdAndTime(int $profile_id)
    {
        return $this->newQuery()->where('profile_id', $profile_id)->where('created_at', Carbon::now()->format('Y-m-d').' 00:00:00','>=')->get();
    }

}
