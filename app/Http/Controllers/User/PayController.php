<?php

namespace App\Http\Controllers\User;

use App\Bill;
use App\Category;
use App\Good;
use App\Goodbill;
use App\Http\Requests\BillFormRequest;
use App\Oder;
use App\Ok;
use App\Pay;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use test\Mockery\Stubs\Habitat;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class PayController extends Controller
{
    public function homePay($id)
    {
        $products = Product::find($id);
        $tt = Bill::all();
        return view('pay',compact('products','tt'));
    }

    public function savePay(BillFormRequest $request)
    {
        $pay = new Bill();
        $pay->name = $request->get('name');
        $pay->phone = $request->get('phone');
        $pay->address = $request->get('address');
        $pay->email = $request->get('email');
        $pay->payment = $request->get('payment');
        $pay->nameSP = $request->get('nameSP');
        $pay->quantity = $request->get('quantity');
        $pay->promotion_price = $request->get('promotion_price');
        $pay->note = $request->get('note');
        if($pay->save())
        {
            Mail::to($request->get('email'))
                ->send(new OrderShipped($pay));
            $mess = 'Mua hàng thành công, hóa đơn mua hàng đã được gửi vào gmail !!!';
        }
        return redirect('/')->with('mess',$mess);
    }
}
