<?php

namespace App\Http\Controllers;

use App\Repositories\ProfileActivityRepository;
use App\Repositories\ProfilePostsActivityRepository;
use App\Repositories\ProfileRepository;
use App\Services\InstagramApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function __construct()
    {
    }

    public function start(
        Request $request,
        InstagramApi $api,
        ProfileRepository $profileRepository,
        ProfileActivityRepository $profileActivityRepository,
        ProfilePostsActivityRepository $profilePostsActivityRepository
    )
    {
        $data = $request->post();
        $validator = $this->makeValidator($data);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $account = $api->getUserByName($data['link']);
        $profile = $profileRepository->getByColumn('instagram_id', $account->getId());
        if (empty($profile)) {
            $profile = $profileRepository->create([
                'instagram_id' => $account->getId(),
                'picture' => $account->getProfilePicUrl(),
                'name' => $account->getUsername(),
                'full_name' => $account->getFullName(),
                'profile_url' => 'https://instagram.com/' . $account->getUsername(),
                'biography' => $account->getBiography()
            ]);
        }

        if ($profile->id) {
            $profileActivity = $profileActivityRepository->getByProfileIdAndTime($profile->id);
            if (empty($profileActivity)) {
                $profileActivityRepository->create([
                    'profile_id' => $profile->id,
                    'follows' => $account->getFollowsCount(),
                    'followers' => $account->getFollowedByCount(),
                    'posts' => $account->getMediaCount(),
                ]);
            }

            $profilePostsActivity = $profilePostsActivityRepository->getByProfileIdAndTime($profile->id);
            if (empty($profilePostsActivity)) {
                $limit = $account->getMediaCount();
                if ($limit > config('services.instagram.limit')) {
                    $limit = config('services.instagram.limit');
                }
                $posts = $api->getUserMedias($account->getId(), $limit);
                foreach ($posts as $post) {
                    $profilePostsActivityRepository->create([
                        'profile_id' => $profile->id,
                        'type' => $post->getType(),
                        'instagram_id' => $post->getId(),
                        'create_date' => $post->getCreatedTime(),
                        'link' => $post->getLink(),
                        'image_url' => $post->getImageStandardResolutionUrl(),
                        'video_url' => $post->getVideoLowResolutionUrl(),
                        'content' => $post->getCaption(),
                        'count_likes' => $post->getLikesCount(),
                        'count_comments' => $post->getCommentsCount(),
                        'location' => $post->getLocationName(),
                    ]);
                }
            }
        }

        return redirect()->route('profile.show', $profile->name);
    }


    public function makeValidator(array $data)
    {
        return Validator::make($data, [
            'link' => 'required'
        ]);


    }
}
