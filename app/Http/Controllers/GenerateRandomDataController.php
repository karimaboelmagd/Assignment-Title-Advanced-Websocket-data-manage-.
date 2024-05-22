<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\WebSocketRandomDataGenerated;
use App\Models\RandomData;
class GenerateRandomDataController extends Controller
{
    public function handleRandomData()
    {

        $data = [
            'A' => rand(1, 100),
            'B' => rand(1, 100),
            'C' => rand(1, 100),
        ];

        // Store in database
      RandomData::create($data);

        // Broadcast
        event(new WebSocketRandomDataGenerated($data));

        return response()->json($data);
    }
}
