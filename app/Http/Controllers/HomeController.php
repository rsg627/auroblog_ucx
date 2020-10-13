<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class HomeController extends Controller
{
     public function __invoke()
    {
       return view('post.posts', ['posts' => post::orderBy('created_at', 'desc')->paginate(10)]);
    }
 
}
