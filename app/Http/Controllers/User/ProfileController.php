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

        return view('User.Profile.index');
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
        $update = User::find($id);

        $update['name']   = $request->name;
        $update['email']  = $request->email;
        $update['suburb'] = $request->suburb;
        $update['phone']  = $request->phone;

        //profile iamge part
        if ($request->hasFile('profile_image')) {
            $path                    = $request->profile_image->store('uploads/user/photos');
            $update['profile_image'] = $path;
        }

        $update->save();

        Session::flash('insert', 'Updated Sucessfully...');
        return redirect()->route('profile.index');
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
