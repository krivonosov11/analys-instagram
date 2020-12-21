<?php

namespace App\Repositories;

use App\Profile;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class ProfileRepository.
 */
class ProfileRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Profile::class;
    }

}
