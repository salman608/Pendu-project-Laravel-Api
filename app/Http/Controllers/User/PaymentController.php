<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Dropper;
use Illuminate\Http\Request;
use Session;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Dropper $dropper)
    {
        // return view('User.collect_n_drop.collect_n_drop', compact('dropper'));
        return view('User.payment.payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.Dropper.Add_Dropper');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'first_name'         => 'required|max:255',
            'last_name'          => 'required|max:255',
            'email'              => 'required|unique:droppers|max:255',
            'phone'              => 'required|unique:droppers',
            'password'           => 'required|string|min:8',
            'abn'                => 'required',
            'vehicle_type'       => 'required',
            'category'           => 'required',
            'license_front_side' => 'required',
            'licensef_back_side' => 'required',
            'profile_image'      => 'required',
        ]);

        //profile iamge part
        if ($request->hasFile('profile_image')) {
            $path = $request->profile_image->store('uploads/dropper/photos');

        }

        //licensef_front_side iamge part
        if ($request->hasFile('license_front_side')) {
            $path = $request->license_front_side->store('uploads/dropper/photos');
        }

        //licensef_back_side iamge part
        if ($request->hasFile('licensef_back_side')) {
            $path = $request->licensef_back_side->store('uploads/dropper/photos');
        }

        Dropper::create([
            'first_name'         => $request->first_name,
            'last_name'          => $request->last_name,
            'email'              => $request->email,
            'phone'              => $request->phone,
            'password'           => $request->password,
            'abn'                => $request->abn,
            'vehicle_type'       => $request->vehicle_type,
            'category_id'        => $request->category_id,
            'licensef_ront_side' => json_encode($licensef_ront_side),
            'licensef_back_side' => json_encode($licensef_back_side),
            'profile_image'      => json_encode($profile_image),
        ]);
        Session::flash('insert', 'Added Sucessfully...');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
