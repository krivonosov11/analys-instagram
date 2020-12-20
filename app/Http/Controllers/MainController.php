<?php

namespace App\Http\Controllers;

use App\Services\InstagramApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function __construct()
    {
    }

    public function start(Request $request, InstagramApi $api)
    {
        $data = $request->post();
        $validator = $this->makeValidator($data);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $account = $api->getUserByName($data['link']);
        dd($api->getUserMedias($account->getId(), 20));

    }


    public function makeValidator(array $data)
    {
        return Validator::make($data, [
            'link' => 'required'
        ]);


    }
}
