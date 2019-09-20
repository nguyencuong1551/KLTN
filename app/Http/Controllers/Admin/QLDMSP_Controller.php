<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QLDMSP_Controller extends Controller
{
    public function homeQLDMSP()
    {
        $products = Product::paginate(5);
        $categories = Category::all();
        return view('Admin.QLDMSP.homeQLDMSP',compact('products','categories'));
    }
}
