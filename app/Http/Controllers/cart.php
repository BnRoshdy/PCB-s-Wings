<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order ;
use Illuminate\View\View;


class cart extends Controller
{
    public function getdata()
    {
        $data = Order::where('userid', Auth::user()->id)->get();

        return view('cart', ['data' => $data]);

    }

    public function editOrder(Request $request)
    {
        $button = $request->input('submit');

        if ($button == "edit") {

            $data_id = $request->input('check');
            $data0 = Order::find($data_id);
            $data0 = Order::select('id', 'useid', 'size', 'design_num', 'quantity', 'layers', 'min_track', 'min_hole_size', 'solder_mask', 'silkscreen', 'stensil', 'price', 'status', 'file_name')->find($data_id);
            return redirect('/');
        } elseif ($button == "delete") {
            $data_id = $request->input('radio');
            $data0 = Order::find($data_id);   // Offer::where('id','$offer_id') -> first();
          $data0->delete();
            return redirect('/cart');
        }
        elseif ($button == "check out") {
            $data_id = $request->input('radio');
            return view('shipping-payment',['id'=>$data_id]);
        }
    }
}
