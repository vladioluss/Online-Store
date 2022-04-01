<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class foxController extends Controller
{
    public function fox(Request $request)
    {
        $id = $request->id;
        $response = Http::get('https://randomfox.ca/', [
            'i' => $id
        ]);
        //$response = $response->file;
        dd($response->image);
        return $response;
    }
}
