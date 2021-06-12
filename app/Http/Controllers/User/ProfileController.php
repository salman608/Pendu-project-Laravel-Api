<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\InvitationMail;
use App\Models\ReferalMail;
use App\Models\Task;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session as FacadesSession;
use Image;
use Tymon\JWTAuth\Contracts\Providers\Auth as ProvidersAuth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $tasks   = Task::where( Auth::user()->id)->get();
        // $history = Task::where([[ Auth::user()->id], ['status', 2]])->get();

        // $data = array(
        //     'tasks'   => $tasks,
        //     'history' => $history,
        // );

        // return view('User.Profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
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
        $user = User::find($id);

         //profile iamge part
         if ($request->hasFile('profile_photo')) {
            $image = $request->file('profile_photo');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(270,270)->save('uploads/user/photos/'.$name_gen);
            $profile_photo = 'uploads/user/photos/'.$name_gen;
        }

        $user['name']           = $request->name;
        $user['email']          = $request->email;
        $user['suburb']         = $request->suburb;
        $user['phone']          = $request->phone;
        if ($request->has('profile_photo')) {
            $user['profile_photo']  = $profile_photo;
        }




        $user->save();

        FacadesSession::flash('insert', 'Updated Sucessfully...');
        return back();
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

    public function sendInvitationMail(Request $req)
    {
        $isInsert = ReferalMail::create([
            'email'      => $req->email,
            'refer_by'   => Auth::user()->id,
            'created_at' => now(),
        ]);

        Mail::to($req->email)->send(new InvitationMail());

        return redirect()->back();
    }
}
