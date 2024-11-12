<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Judge0Controller extends Controller
{
    public function submitCode(Request $request)
    {
        $client = new Client();

        try {
            $response = $client->post('http://localhost:2358/submissions', [
                'json' => [
                    'source_code' => $request->input('source_code'),
                    'language_id' => $request->input('language_id'),
                    'stdin' => $request->input('stdin'),
                    'expected_output' => $request->input('expected_output'),
                ]
            ]);

            $responseBody = json_decode($response->getBody(), true);
            $token = $responseBody['token'];

            $resultBody = null;
            do {
                sleep(1); 
                $resultResponse = $client->get("http://localhost:2358/submissions/$token");
                $resultBody = json_decode($resultResponse->getBody(), true);
            } while (in_array($resultBody['status']['id'], [1, 2]));


            if ($resultBody['status']['id'] == 4) { // Se for "Wrong Answer"
                return view('/comparison/diffError', [
                    'user_output' => $resultBody['stdout'] ?? '',
                    'expected_output' => $request->input('expected_output'),
                    'source_code' => $request->input('source_code'),
                ]);
            } elseif ($resultBody['status']['id'] != 3) { // Se não for "Accepted" ou "Wrong Answer"
                return view('errors.error', [
                    'error' => $resultBody['stderr'] ?? 'Unknown error',
                    'status' => $resultBody['status']['description'],
                    'message' => $resultBody['message'] ?? 'No message provided',
                    'code' => $request->input('source_code')
                ]);
            }
            

            return view('submission.result', [
        'result' => $resultBody,
        'token' => $token,
        'code' => $request->input('source_code')
    ]);

        } catch (\Exception $e) {
            return view('errors.error', [
                'error' => $e->getMessage(),
                'status' => 'Exception',
                'message' => 'An unexpected error occurred',
                'code' => $request->input('source_code')
            ]);
        }
    }
}
