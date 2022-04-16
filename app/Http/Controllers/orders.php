<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order ;

class orders extends Controller
{
  public function add(Request $request){
        $file_extension = $request -> file -> getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'C:\xampp\htdocs\pcb\public\grbl_files';
        $request -> file -> move($path,$file_name);
        $order = new Order();
        $order -> userid = Auth::user()->id;
        $size = $request->input('sizex') * $request->input('sizey');
        $order -> size =  $size;
        $order -> quantity = $request->input('quantity');
        $order -> design_num = $request->input('design_num');
        $order -> layers = $request->input('layers');
        $order -> min_track = $request->input('min_track');
        $order -> min_hole_size = $request->input('min_hole_size');
        $order -> solder_mask = $request->input('solder_mask');
        $order -> silkscreen = $request->input('silkscreen');
        $order -> stensil = $request->input('stensil');
        $order -> price = $size * 5 ;
        $order -> status = "not confirmed";
        $order -> file_name = $file_name;
        $order ->save();
    return redirect("/");
}
}
