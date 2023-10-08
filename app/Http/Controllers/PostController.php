<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost()
    {
        $post = new Post;
        $post->name = 'Test Post';
        $post->save();

        $image = [];
        $image['url'] = 'https://www.imgacademy.com/sites/default/files/school-about-us-slider-22.jpg';

        // dd($image);
        $post->image()->create($image);

        dd('success');
    }

    public function post()
    {
        $posts = Post::all();
        $image = Image::find(1);
        dd($image->imageable);
    }

    public function createUser()
    {
        $post = new Post;
        $post->name = 'Test Post';
        $post->save();

        $image = [];
        $image['url'] = 'https://www.imgacademy.com/sites/default/files/school-about-us-slider-22.jpg';

        // dd($image);
        $post->image()->create($image);

        dd('success');
    }
}
