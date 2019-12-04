<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        unset($request['_token']);
        if (Auth::attempt($request)) {
            dd('login');
        } else {
            dd('not login');
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response($validator->errors()->first(), 422);
        }

        $register = new Register();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = bcrypt($request->password);

        $register->save();

        return view('main.login');
    }
}
