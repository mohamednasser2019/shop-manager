<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    public function home()
	{

        // $category = Category::all();
        // $user = User::all();
        // $product = Product::all();

        // $data['category'] = $category;
        // $data['user'] = $user;
        // $data['product'] = $product;
// ,compact('data')

		
		return view('mainPage');
	}
}
