<?php

namespace App\Http\Controllers;

use App\Models\SocialPost;

class SocialPostsController extends Controller
{
    /**
     * Display all posts stream
     */
    public function index()
    {
        // get all social media posts
        $socialposts = SocialPost::all();

        // return view with socialposts
        return view('socialpost/index')->with('socialposts', $socialposts);
    }
}
