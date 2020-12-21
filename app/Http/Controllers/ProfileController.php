<?php

namespace App\Http\Controllers;

use App\Repositories\ProfileActivityRepository;
use App\Repositories\ProfilePostsActivityRepository;
use App\Repositories\ProfileRepository;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(
        ProfileRepository $profileRepository,
        ProfileActivityRepository $profileActivityRepository,
        ProfilePostsActivityRepository $profilePostsActivityRepository,
        string $username
    )
    {
        $profile = $profileRepository->getByColumn($username, 'name');
        if (empty($profile)) {
            abort(404);
        }

        $bestPost = $profilePostsActivityRepository->getBestPost($profile->id);
        $lastPosts = $profilePostsActivityRepository->getLastPosts($profile->id);
        $sumLikes = $profilePostsActivityRepository->getCountItems($profile->id, 'count_likes');
        $sumComments = $profilePostsActivityRepository->getCountItems($profile->id, 'count_comments');
        $statistic = $profileActivityRepository->getStatistic($profile->id);

        return view('profile.index', compact('profile', 'bestPost', 'lastPosts', 'sumLikes', 'sumComments', 'statistic'));
    }

    public function posts(
        ProfileRepository $profileRepository,
        ProfilePostsActivityRepository $profilePostsActivityRepository,
        string $username
    )
    {
        $profile = $profileRepository->getByColumn($username, 'name');
        if (empty($profile)) {
            abort(404);
        }
        $postsLatsTime = $profilePostsActivityRepository->getPostsLastTime($profile->id);

        return view('profile.posts', compact('profile', 'postsLatsTime'));
    }
}
