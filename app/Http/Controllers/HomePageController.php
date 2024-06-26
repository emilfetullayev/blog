<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){

        $articles=Article::all();
        $categories=Category::all();

        return view('front.homePage',compact('articles','categories'));
    }
}
