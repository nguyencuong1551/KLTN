<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserFormRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QLND_Controller extends Controller
{
    public function homeQLND()
    {
        $users = User::paginate(4);
        return view('Admin.QLND.homeQLND',compact('users'));
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('Admin.QLND.editQLND',compact('users'));
    }
    public function editQLND(UserFormRequest $request, $id)
    {
        $thongbao="";
        $users = User::find($id);
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        if($users->save())
        {
            $thongbao = "Sửa thành công";
        }
        return view('Admin.QLND.editQLND',compact('users','thongbao'));
    }
    public function deleteQLND(Request $request)
    {
        $users = User::find($request->get('id'));
        $users->delete();
      return redirect('/QLND')->with('thongbao','Xóa thành công');
    }

}
