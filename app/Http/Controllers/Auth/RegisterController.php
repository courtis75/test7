<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

     protected function redirectTo()
     {
         if (auth()->user()->role === 'admin') {
             return '/admin/posts';
         }
 
         return '/home';
     }

    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
       // $this->middleware('guest');//->except('showRegistrationForm');
    }

    public function showRegistrationForm()
    {
        
         // Ensure only admins can access this method
         //if (!Auth::check() || !Auth::user()->isAdmin()) {

              //dd('here');
              //return redirect('/home');
        //}
        
        return view('auth.register');
    }

    public function register(Request $request)
    {
        //dd($request->all());
        //$this->validator($request->all())->validate();
      
        
        $data = $request->all();
        $data['is_admin'] = $request->has('is_admin') && $request->input('is_admin') == 'true';
        $data['role'] = ucfirst($data['role']);
        //dd($data);
        $validator = $this->validator($data);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
        $user = $this->create($request->all());
     
     
        if (!Auth::check()) {
            $currentUser = Auth::user();
           
            //if (!$currentUser->isAdmin()) {
                // Log in the newly created user if the current user is not an admin
                $this->guard()->login($user);
            //}
        }

        return redirect($this->redirectPath());
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'is_admin' => ['required', 'boolean'], 
            'role' => ['required', 'string', 'in:Admin,Author,User'],
            

        ]);   

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //dd($data['role']);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => $data['is_admin'] === 'true',
            'role' => $data['role'],
        ]);
    }
}
