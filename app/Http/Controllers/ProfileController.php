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

    public function dynamic(
        ProfileRepository $profileRepository,
        ProfilePostsActivityRepository $profilePostsActivityRepository,
        ProfileActivityRepository $profileActivityRepository,
        string $username
    )
    {
        $profile = $profileRepository->getByColumn($username, 'name');
        if (empty($profile)) {
            abort(404);
        }

        $locationStatistic = $profilePostsActivityRepository->getLocationStatistic($profile->id);
        $typeStatistic = $profilePostsActivityRepository->getTypeStatisitc($profile->id);
        $activityStatistic = $profilePostsActivityRepository->getActivityStatistic($profile->id);
        $statistic = $profileActivityRepository->getStatistic($profile->id);

        return view('profile.dynamic', compact('profile', 'typeStatistic', 'locationStatistic', 'activityStatistic', 'statistic'));
    }

    public function with(
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
        $allProfiles = $profileRepository->all();
        $lastPosts = $profilePostsActivityRepository->getLastPosts($profile->id);
        $sumLikes = $profilePostsActivityRepository->getCountItems($profile->id, 'count_likes');
        $sumComments = $profilePostsActivityRepository->getCountItems($profile->id, 'count_comments');
        $statistic = $profileActivityRepository->getStatistic($profile->id);
        $with = false;
        $profileWith = false;
        return view('profile.compare', compact('profile', 'lastPosts', 'sumLikes', 'sumComments', 'statistic', 'with', 'allProfiles', 'profileWith'));
    }

    public function withUser(
        ProfileRepository $profileRepository,
        ProfileActivityRepository $profileActivityRepository,
        ProfilePostsActivityRepository $profilePostsActivityRepository,
        string $username,
        string $with
    )
    {
        $profile = $profileRepository->getByColumn($username, 'name');
        if (empty($profile)) {
            abort(404);
        }

        $profileWith = $profileRepository->getByColumn($with, 'name');
        if (empty($profileWith)) {
            abort(404);
        }
        $allProfiles = $profileRepository->all();
        $lastPosts = $profilePostsActivityRepository->getLastPosts($profile->id);
        $lastPostsWith = $profilePostsActivityRepository->getLastPosts($profileWith->id);

        $sumLikes = $profilePostsActivityRepository->getCountItems($profile->id, 'count_likes');
        $sumComments = $profilePostsActivityRepository->getCountItems($profile->id, 'count_comments');
        $sumLikesWith = $profilePostsActivityRepository->getCountItems($profileWith->id, 'count_likes');
        $sumCommentsWith = $profilePostsActivityRepository->getCountItems($profileWith->id, 'count_comments');


        $statistic = $profileActivityRepository->getStatistic($profile->id);
        $statisticWith = $profileActivityRepository->getStatistic($profileWith->id);

        return view('profile.compare', compact('profile', 'lastPosts', 'sumLikes', 'sumComments', 'statistic', 'with', 'allProfiles',
            'profileWith', 'lastPostsWith', 'sumLikesWith', 'sumCommentsWith', 'statisticWith'));
    }
}
