<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return response()->json(array("about"=>"<p>ABOUT</p>"), 200);
    }
}
