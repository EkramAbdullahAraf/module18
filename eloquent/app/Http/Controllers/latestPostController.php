<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class latestPostController extends Controller
{
    public function index()
    {
        $categories = Category::with('latestPost')->get();
        return view('latest_posts', ['categories' => $categories]);
    }
    public function latestPost($categoryId)
    {


        $category = Category::find($categoryId);
        $latestPost = $category->latestPost;



    }
}
