<?php

namespace App\Http\Controllers;

use App\Models\SocialPost;
use Illuminate\Http\Request;

class SocialPostsController extends Controller
{
    /**
     *  Display streams
     */
    public function index()
    {
        $socialposts = SocialPost::all();

        return view('socialpost/index')->with('socialposts', $socialposts);
    }
}
