<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QLDM_Controller extends Controller
{
    public function add()
    {
        return view('Admin.QLDMSP.QLDM.addCategory');
    }
    public function addCategory(CategoryFormRequest $request)
    {
        $thongbao = "";
        $categories = new Category();
        $categories->name = $request->get('name');
        if ($categories->save())
        {
            $thongbao = "Thêm thành công";
        }
        return view('Admin.QLDMSP.QLDM.addCategory',compact('categories','thongbao'));
    }
    public function edit($id)
    {
        $categories = Category::find($id);
        return view('Admin.QLDMSP.QLDM.editCategory',compact('categories'));
    }
    public function editCategory(CategoryFormRequest $request,$id)
    {
        $thongbao="";
        $categories = Category::find($id);
        $categories->name = $request->get('name');
        if($categories->save())
        {
            $thongbao = "Sửa Thành Công";
        }
        return view('Admin.QLDMSP.QLDM.editCategory',compact('categories','thongbao'));
    }
    public function deleteCategory($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect('/QLDMSP')->with('thongbao','Xóa thành công');

    }
    public function ajax(Request $request)
    {
        $products = Category::find($request->get('id_category'))->product;
        echo view('Admin.QLDMSP.QLDM.ajax',compact('products'));
        exit;
    }
}
