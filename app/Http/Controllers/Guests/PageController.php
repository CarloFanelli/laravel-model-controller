<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        return view('home', ['movies' => Movie::all(), 'heading' => 'Our Movies']);
    }
}
