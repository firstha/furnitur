<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blogs;
use App\Models\Products;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage()
    {
        $products = Products::with('category')->get();
        return view('frontend.homepage', compact('products'));
    }
    public function product()
    {
        $products = Products::with('category')->get();
        return view('frontend.product', compact('products'));
    }
    public function contact()
    {
        $user = User::first();
        return view('frontend.contact', compact('user'));
    }
    public function blog()
    {
        $blogs = Blogs::all();
        return view('frontend.blog', compact('blogs'));
    }
}
