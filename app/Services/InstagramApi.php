<?php


namespace App\Services;



use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use InstagramScraper\Instagram;
use Phpfastcache\Helper\Psr16Adapter;

final class InstagramApi
{
    /**
     * @var Instagram
     */
    private $_api;

    public function __construct(Instagram $instagram)
    {
        $this->_api = $instagram;
//        $this->_api = $instagram::withCredentials(new Client(), '', '', new Psr16Adapter('Files'));
//        $this->_api->login();
//        $this->_api->saveSession();
    }

    /**
     * @param string $name
     * @return array|\InstagramScraper\Model\Account
     */
    public function getUserByName(string $name)
    {
        try {
            return $this->_api->getAccount($name);
        }catch (\Exception $exception){
            Log::error($exception->getMessage());
            return [];
        }
    }

    /**
     * @param int $id
     * @param int $limit
     * @return array|\InstagramScraper\Model\Media[]
     */
    public function getUserMedias(int $id, int $limit = 12)
    {
        try {
            return $this->_api->getMediasByUserId($id, $limit);
        }catch (\Exception $exception){
            Log::error($exception->getMessage());
            return [];
        }
    }
}
