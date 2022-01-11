<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post) //「PostモデルにあるPostインスタンスの性質を持つ」変数$postという意味
    {
    return view('posts/index') -> with(['posts' => $post->getPaginateByLimit()]);
    }
    // Post.phpにある$postがgetByLimit()関数によって得た返り値を，
    // $postsという変数名で格納して，posts/indexに表示した．
}
?>