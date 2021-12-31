<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;
use View;

class BlogController extends Controller
{
    public function blog()
        {
            $data = Blog::latest()->get();
            return view('blog', compact('data'));
        }

        public function read($id)
        {
            $datass = Blog::latest()->get();
            $data = Blog::latest()->where('id','=',$id)->get();

            return view('read', ['data' => $data,'datass'=>$datass]);
        }
}
