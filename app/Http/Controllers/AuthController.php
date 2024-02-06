<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function oauthToken(Request $request)
    {
        $http = new Client();
        // $response = $http->post('https://localhost/oauth/token', [
        //     'form_params' => [
        //         'grant_type' => 'client_credentials',
        //         'client_id' => '3',
        //         'client_secret' => '0CX2ZR1tusYXnOiu98qaw2cmDXMh7Uco1t0IRibq'
        //     ],
        // ]);

        $response = $http->post(env('APP_URL') . '/oauth/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => '3',
                'client_secret' => '0CX2ZR1tusYXnOiu98qaw2cmDXMh7Uco1t0IRibq'
            ],
        ]);


        dd($response);
    }
}
