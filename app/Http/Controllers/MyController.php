<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class MyController extends Controller
{
  public function index()
  {
    $category = Category::all();
    return view("login", compact("categories"));
  }
}
