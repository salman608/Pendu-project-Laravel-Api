<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceFee;
use Illuminate\Http\Request;

class ServiceFeeConttroller extends Controller
{
    // ===========Service Fee list==========

    public function index(){
        return view('admin.pages.promo_code.index');

    }

    // ===========Service Fee Create==========
    public function create(){
      return view('admin.pages.promo_code.create');
    }

    // ===========Service Fee Store==========
    public function store(Request $request){
        $request->validate([
            'amount'=>'required',
          ]);
          $service_fee=new ServiceFee();
          $service_fee->amount=$request->amount;
          $service_fee->save();
          return back();
    }

    // ===========Service Fee Edit============

    public function edit($id){
         $service_fee=ServiceFee::findOrFail($id);
         return view('admin.pages.service_fee.edit',compact('service_fee'));

    }

    // =============Service Fee Update===========
     public function update(Request $request ,$id){
        $service_fee=ServiceFee::findOrFail($id);
        $service_fee->amount=$request->amount;
        $service_fee->save();
        return back();
     }

    // =============Service Fee delete===========


}
