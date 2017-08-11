<?php

namespace App\Http\Controllers\ConducteurAuth;

use App\Conducteur;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/conducteur';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('client.guest');
        $this->middleware('conducteur.guest');
        $this->middleware('admin.guest');
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
            'username' => 'required|max:255|unique:conducteurs',
            'email' => 'required|email|max:255|unique:conducteurs',
            'password' => 'required|min:6|confirmed',
            'nom' => 'required|max:255|alpha',
            'prenom' => 'required|max:255|alpha',
            'langue' => 'required|max:255|alpha',
            'address' => 'required|max:255',
            'numero_tel' => 'required|max:255|unique:conducteurs',
            'code_postal' => 'required|Numeric',


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Conducteur
     */
    protected function create(array $data)
    {
        return Conducteur::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'langue' => $data['langue'],
            'address' => $data['address'],
            'numero_tel' => $data['numero_tel'],
            'code_postal' => $data['code_postal'],

        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('conducteur.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('conducteur');
    }
}
