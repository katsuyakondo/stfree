<?php

// app/Http/Controllers/OpenAIController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class OpenAIController extends Controller
{
    public function getResponse(Request $request)
    {
        $validatedData = $request->validate([
            'prompt' => 'required|string',
        ]);

        $client = new Client();

        $response = $client->post('https://api.openai.com/v1/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'text-davinci-003', // モデルを適宜選択
                'prompt' => $validatedData['prompt'],
                'temperature' => 0.7,
                'max_tokens' => 150,
            ],
        ]);

        $body = json_decode((string) $response->getBody(), true);

        return response()->json($body);
    }
}
