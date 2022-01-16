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
    // $postsという変数名で格納して，posts/indexに表示した
    // withメソッドは，viewに変数(など)を追加するためのメソッド．
    public function show(Post $post)
    {
        return view('posts/show') -> with(['post' => $post]);
    }
    public function create()
    {
        return view('posts/create');
    }
    public function store(Post $post, Request $request) 
    {
        $input = $request['post']; 
        //request['post']は，postをキーに持つリクエストパラメータを取得することができる．
        
        $post->fill($input)->save();
        //$post->fill($input)と記述することで，さっきまで空の$post(Postインスタンス)の
        //プロパティを，受け取ったキーごとに上書きできる．
        //具体的に，$post->titleはタイトル，$ost->bodyは本文という値になる．
        // fill関数+save関数はcreate関数とほぼ同じであるので，
        //$post->create($input)としても同じ挙動を示す．
        
        return redirect('/posts/'.$post->id);
        // 保存処理が終わった後，/posts/1など，今回保存したpostの
        //IDを含んだURLにリダイレクトする．
    }
}
?>

