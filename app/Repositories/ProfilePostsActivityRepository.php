<?php

namespace App\Repositories;

use App\ProfilePostsActivity;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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
        $latsParse = $this->model::query()->where('profile_id', $profile_id)->first();

        return $this->model::query()->where('profile_id', $profile_id)->where('created_at', $latsParse->created_at->format('Y-m-d'))->orderByDesc('created_at')->limit(4)->get();
    }

    public function getCountItems(int $profile_id, string $item)
    {
        return ProfilePostsActivity::query()->where('profile_id', $profile_id)->groupBy('created_at')->sum($item);
    }

    public function getPostsLastTime(int $profile_id)
    {
        $latsParse = $this->model::query()->where('profile_id', $profile_id)->first();

        return ProfilePostsActivity::query()->where('profile_id', $profile_id)->where('created_at', $latsParse->created_at->format('Y-m-d'))->get();
    }

    public function getLocationStatistic($profile_id)
    {
        $latsParse = $this->model::query()->where('profile_id', $profile_id)->first();

        $data = $this->model::query()->select(DB::raw('COUNT(*) as number'), 'location')
            ->where('profile_id', $profile_id)
            ->where('location', '<>', '')
            ->where('created_at', $latsParse->created_at->format('Y-m-d H:i:s'))
            ->groupBy('location')
            ->orderByDesc('number')
            ->limit(10)
            ->get();

        $statistic = ['labels' => [], 'series' => []];
        foreach ($data as $item) {
            $statistic['labels'][] = $item->location;
            $statistic['series'][] = $item->number;
        }

        return $statistic;
    }

    public function getTypeStatisitc($profile_id)
    {
        $latsParse = $this->model::query()->where('profile_id', $profile_id)->first();

        $data = $this->model::query()->select(DB::raw('COUNT(*) as number'), 'type')
            ->where('profile_id', $profile_id)
            ->where('created_at', $latsParse->created_at->format('Y-m-d H:i:s'))
            ->groupBy('type')->get();

        $statistic = [];
        foreach ($data as $item) {
            $statistic['labels'][] = ucfirst($item->type);
            $statistic['series'][] = $item->number;
        }

        return $statistic;
    }

    public function getActivityStatistic($profile_id)
    {
        $data = $this->model::query()->select(DB::raw('SUM(count_likes) as likes'), DB::raw('SUM(count_comments) as comments'), 'created_at')
            ->where('profile_id', $profile_id)
            ->groupBy('created_at')
            ->get();

        $statistic = [
            'graph'=>[['name' => 'Likes', 'data'=>[]], ['name' => 'Comments', 'data'=>[]]],
            'labels'=>[]
        ];
        foreach ($data as $item) {
            $statistic['labels'][] = $item->created_at->format('Y-m-d');
            $statistic['graph'][0]['data'][] = $item->likes;
            $statistic['graph'][1]['data'][] = $item->comments;
        }

        return $statistic;
    }

}
