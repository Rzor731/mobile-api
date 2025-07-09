<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApiController extends Controller
{
    public function hello()
    {
        return response()->json(['message' => 'Hello from TestApiController']);
    }
}
