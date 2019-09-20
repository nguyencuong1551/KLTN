<?php

namespace App\Http\Controllers\Admin;

use App\Bill;
use App\Ok;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QLDH_Controller extends Controller
{
    public function homeQLDH()
    {
        $bills = Bill::paginate(5);
        return view('Admin.QLDH.homeQLDH',compact('bills'));
    }

    public function delete($id)
    {
        $bills = Bill::find($id);
        $bills->delete();
        return redirect('/QLDH')->with('mess','Hủy đơn thành công');
    }
}
