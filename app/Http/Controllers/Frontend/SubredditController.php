<?php

namespace App\Http\controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SubredditController extends Controller
{
    public function show($slug)
    {
        $subreddit = Community::where('slug', $slug)->first();

        return Inertia::render('Subreddit/Show', compact('subreddit'));
    }
}
