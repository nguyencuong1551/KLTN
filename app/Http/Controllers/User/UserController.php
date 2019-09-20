<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Http\Requests\CommentFormRequest;
use App\Product;
use App\User;
use DemeterChain\C;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function welcome()
    {
        $products = Product::paginate(12);
        $categories = Category::all();
        return view('welcome', compact('categories', 'products'));
    }

    //
    public function description($id)
    {
        $products = Product::find($id);
        $product= Product::all()->where('id_category', '=',22);
        $product1= Product::all()->where('id_category', '=',23);
        return view('thongtinsp', compact('products', 'product','product1'));
    }
    //
    public function search(Request $request)
    {
        $categories = Category::all();
        $products = Product::where('name', 'like', '%'.$request->key.'%')
            ->orWhere('unit_price', 'like', '%'.$request->key.'%')->get();
        return view('search', compact('products', 'categories','request'));
    }

    public function ajax(Request $request)
    {
        $products = Category::find($request->get('id_category'))->product;
        echo view('ajax', compact('products'));
        exit;
    }
    public function  quangcao()
    {
        $advertisement = Product::where('id_category','=',12)->paginate(12);
        $categories = Category::all();
        return view('quangcao',compact('advertisement','categories'));
    }
}
