<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

use App\Http\Requests\ArticleFormRequest;

class AdminsController extends Controller
{
    public function admin()
    {
    	return view('admin.admin');
    }
    public function addarticles()
    {
    	return view('admin.add_article');
    }
    public function store(ArticleFormRequest $request)
    {
        Article::create([
            'name'=> request('name'),
            'caption'=> request('caption'),
            'content'=> request('content'),
            'img'=> request('img')
        ]);


        return redirect('/');
    }
}
