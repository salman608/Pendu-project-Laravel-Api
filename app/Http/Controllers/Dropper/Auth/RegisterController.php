<?php

namespace App\Http\Controllers\Dropper\Auth;

use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Controller;
use App\Models\Dropper;
use App\Models\Service;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::USER_HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:dropper');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'first_name' => ['required', 'string', 'max:255'],
    //         'last_name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'phone' => ['required', 'max:255'],
    //         'password' => ['required', 'string', 'min:8'],
    //         'abn' => ['required', 'string', 'max:255'],
    //         'service_id' => ['required'],
    //         'vehicle_id' => ['required'],
    //         'license_front' => ['required'|'mimes:jpeg,jpg,png'],
    //         'license_back' => ['required'|'mimes:jpeg,jpg,png'],
    //         'profile_image' => ['required'|'mimes:jpeg,jpg,png'],
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\Models\User
    //  */
    // public static function create(array $data)
    // {

    //    return User::create([
    //         'first_name' => $data['first_name'],
    //         'last_name' => $data['last_name'],
    //         'email' => $data['email'],
    //         'phone' => $data['phone'],
    //         'password' => Hash::make($data['password']),
    //         'abn' => $data['abn'],
    //         'service_id' => $data['service_id'],
    //         'vehicle_id' => $data['vehicle_id'],
    //         'vehicle_id' => $data['vehicle_id'],

    //     ]);

    // }


    public function register(Request $request)
    {

        $validated = $request->validate([
            'first_name'         => 'required|max:255',
            'last_name'          => 'required|max:255',
            'email'              => 'required|unique:droppers|max:255',
            'phone'              => 'required|unique:droppers',
            'password'           => 'required|string|min:8',
            'abn'                => 'required',
            'services'           => 'required',
            'vehicle_id'         => 'required',
            'license_front'      => 'required|mimes:jpeg,jpg,png',
            'license_back'       => 'required|mimes:jpeg,jpg,png',
            'profile_image'      => 'required|mimes:jpeg,jpg,png',
        ]);


        // Profile image
        if ($request->hasFile('profile_image')) {
            $profile_image = $request->profile_image->store('uploads/dropper/photos');

        }

        //licensef_front_side iamge part
        if ($request->hasFile('license_front')) {
            $license_front = $request->license_front->store('uploads/dropper/photos');
        }

        //licensef_back_side iamge part
        if ($request->hasFile('license_back')) {
            $license_back = $request->license_back->store('uploads/dropper/photos');
        }


            $dropper=Dropper::create([
                'first_name'         => $request->first_name,
                'last_name'          => $request->last_name,
                'email'              => $request->email,
                'phone'              => $request->phone,
                'password'           => Hash::make($request['password']),
                'abn'                => $request->abn,
                'vehicle_id'         => $request->vehicle_id,
                'license_front'      => $request->license_front,
                'license_back'       => $request->license_back,
                'profile_image'      => $request->profile_image,
            ]);
            $dropper->services()->attach($request->services);

            return view('Dropper.auth.login');

    }

    // public function register(Request $request) {

    //     $validator = Validator::make($request->all(), [
    //         'first_name' => 'required|string|between:2,100',
    //         'last_name' => 'required|string|between:2,100',
    //         'email' => 'required|string|email|max:100|unique:droppers',
    //         'phone' => 'required|string|max:16',
    //         'abn' => 'required|string',
    //         'vehicle_id' => 'required',
    //         'service_id' => 'required',
    //         'license_front' => 'required',
    //         'license_back' => 'required',
    //         'profile_image' => 'required',
    //         'password' => 'required|string|min:6',
    //     ]);

    //      //profile image part
    //      if ($request->hasFile('profile_image')) {
    //         $path = $request->profile_image->store('uploads/dropper/photos');

    //     }

    //     //licensef_front_side image part
    //     if ($request->hasFile('license_front')) {
    //         $path = $request->license_front->store('uploads/dropper/photos');
    //     }

    //     //licensef_back_side image part
    //     if ($request->hasFile('license_back')) {
    //         $path = $request->license_back->store('uploads/dropper/photos');
    //     }

    //     if($validator->fails()){
    //         return response()->json($validator->errors()->toJson(), 400);
    //     }


    //     $dropper = Dropper::create(array_merge(
    //                 $validator->validated(),
    //                 ['password' => bcrypt($request->password)]
    //             ));

    //     return view('Dropper.auth.login');
    // }

    public function showRegisterForm()
    {
        $data=[];
        $data['vehicles']=Vehicle::all();
        $data['services']=Service::all();
        return view('dropper.auth.register',$data);
    }
}
