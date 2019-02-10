<?php

namespace App\Http\Controllers;

use App\Category;

class FrontEndAboutController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('about', ['categories' => $categories]);
    }
}
