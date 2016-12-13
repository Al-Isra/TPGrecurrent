<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class MemberController extends Controller
{
    public function registrationFrom()
    {

        $client = new Client([
            // You can set any number of default request options.
            'timeout' => 15,
        ]);
        try {
            $response = $client->request('GET', 'https://memberdesq.sportstg.com/index.cfm', [
                'query' => [
                    'fuseaction' => 'Registration_0',
                    'OrgID' => 8274
                ]
            ]);

            $body = $response->getBody();
            echo $body->getContents();
            return view('registration');
        } catch (ClientException  $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }
    }
}
