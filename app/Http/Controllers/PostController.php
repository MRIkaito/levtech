<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
    return view('posts/index') -> with(['posts' => $post->get()]);
    }
    // Post.phpにある$postがget()メソッドによって得た返り値を，
    // $postsという変数名で格納して，posts/indexに表示した．
}
?>