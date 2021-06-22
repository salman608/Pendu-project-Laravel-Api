<?php

namespace App\Http\Controllers\Dropper;

use App\Http\Controllers\Controller;
use App\Models\Dropper;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Models\User;    
use Illuminate\Support\Facades\Hash;


class DropperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user.dropper.Add_Dropper');
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
            'category_id'        => 'required',
            'license_front_side' => 'required',
            'licensef_back_side' => 'required',
            'profile_image'      => 'required',
        ]);

        //profile iamge part
        if ($request->hasFile('profile_image')) {
            $licensef_ront_side = $request->profile_image->store('uploads/dropper/photos');

        }

        //licensef_front_side iamge part
        if ($request->hasFile('license_front_side')) {
            $licensef_back_side = $request->license_front_side->store('uploads/dropper/photos');
        }

        //licensef_back_side iamge part
        if ($request->hasFile('licensef_back_side')) {
            $profile_image = $request->licensef_back_side->store('uploads/dropper/photos');
        }

        DB::beginTransaction();
        try {
            Dropper::create([
                'first_name'         => $request->first_name,
                'last_name'          => $request->last_name,
                'email'              => $request->email,
                'phone'              => $request->phone,
                'abn'                => $request->abn,
                'vehicle_type'       => $request->vehicle_type,
                'category_id'        => $request->category_id,
                'licensef_ront_side' => isset($licensef_ront_side) ? $licensef_ront_side : null,
                'licensef_back_side' => isset($licensef_back_side) ? $licensef_back_side : null,
                'profile_image'      => isset($profile_image) ? $profile_image : null,
            ]);

            $is = User::create([
                'name'     => $request->first_name . ' ' . $request->last_name,
                'email'    => $request->email,
                'suburb'   => 'something',
                'role_id'  => 3,
                'phone'    => $request->password,
                'password' => Hash::make($request->password),
            ]);

        } catch (\Throwable $th) {
            DB::rollback();
            Session::flash('insert', 'Unsuccessful to insert');
            return back();
        }

        DB::commit();
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
