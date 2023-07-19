<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    public function index(){
        $posts = Post::all();

        $response = [
            "success" => true,
            "results" => $posts,
        ];

        return response()->json($response);
    }
}
