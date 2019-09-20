<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\ProductFormRequest;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QLSP_Controller extends Controller
{
    public function add()
    {
        $categories = Category::all();
        return view('Admin.QLDMSP.QLSP.addProduct',compact('categories'));
    }
    public function addProduct(ProductFormRequest $request)
    {
        $categories = Category::all();
        $mess ="";
        $products = new Product();
        $products->name = $request->get('name');
        $products->image = $request->get('image');
        $products->image1 = $request->get('image1');
        $products->image2 = $request->get('image2');
        $products->image3 = $request->get('image3');
        $products->description =$request->get('description');
        $products->unit_price =$request->get('unit_price');
        $products->promotion_price =$request->get('promotion_price');
        $products->id_category =$request->get('id_category');
        if ($products->save())
        {
            $mess = "Thêm thành công";
        }
        return view('Admin.QLDMSP.QLSP.addProduct',compact('categories','mess'));
    }
    public function edit($id)
    {
        $categories = Category::all();
        $products = Product::find($id);
        return view('Admin.QLDMSP.QLSP.editProduct',compact('categories','products'));
    }
    public function editProduct(ProductFormRequest $request,$id)
    {
        $mess="";
        $categories = Category::all();
        $products = Product::find($id);
        $products->name = $request->get('name');
        $products->image = $request->get('image');
        $products->image1 = $request->get('image1');
        $products->image2 = $request->get('image2');
        $products->image3 = $request->get('image3');
        $products->description =$request->get('description');
        $products->unit_price =$request->get('unit_price');
        $products->promotion_price =$request->get('promotion_price');
        $products->id_category =$request->get('id_category');
        if ($products->save())
        {
            $mess = "Sửa thành công";
        }
        return view('Admin.QLDMSP.QLSP.editProduct',compact('categories','products'))->with('mess',$mess);
    }
    public function deleteProduct($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect('/QLDMSP')->with('mess','Xóa thành công');
    }
    public function searchSP(Request $request)
    {
        $categories = Category::all();
        $products = Product::where('name', 'like', '%'.$request->key.'%')
            ->orWhere('unit_price', 'like', '%'.$request->key.'%')->get();
        return view('Admin.QLDMSP.searchSP',compact('products','categories','request'));
    }
}
