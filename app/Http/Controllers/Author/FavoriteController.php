<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
  $posts = Auth::user()->favorite_posts;
  return view('author.favorite',compact('posts'));
}
