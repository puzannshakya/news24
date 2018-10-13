<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('home');
    }
    public function getCreateCategory()
    {
        return view('categories/create_category');
    }
}
