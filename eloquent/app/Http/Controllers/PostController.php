<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class PostController extends Controller
{


    public function index()
    {
        $posts = Post::with('category')->get();
        return view('posts', ['posts' => $posts]);


    }

    public function getPostsByCategory($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts;


    }
    public function getTotalPostsByCategory($categoryId)
    {
        $totalPosts = Post::getTotalPostsByCategory($categoryId);


    }


    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();


    }

    public function getSoftDeletedPosts()
    {
        $softDeletedPosts = Post::getSoftDeletedPosts();


    }


}
