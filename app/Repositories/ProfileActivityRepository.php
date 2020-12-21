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
        return $this->newQuery()->where('profile_id', $profile_id)->where('created_at', Carbon::now()->format('Y-m-d') . ' 00:00:00', '>=')->get();
    }

    /**
     * @param int $id
     * @return array[]
     */
    public function getStatistic(int $id)
    {
        $parses = $this->model::query()->where('profile_id', $id)->get();
        $statistic = ['series' => [
            [
                'name'=>'Posts',
            ],
            [
                'name'=>'Followers'
            ],
            [
                'name'=>'Follows'
            ],
        ], 'categories' => []];

        foreach ($parses as $pars) {
            $statistic['series'][0]['data'][] = $pars->posts;
            $statistic['series'][1]['data'][] = $pars->followers;
            $statistic['series'][2]['data'][] = $pars->follows;
            $statistic['categories'][] = $pars->created_at->format('Y-m-d');
        }

        return $statistic;
    }

}
