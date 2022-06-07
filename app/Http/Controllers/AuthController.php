<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('pages.login');
    }

    public function loginProses(Request $request)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        if (Auth::attempt($request->only('email','password'))) {
            $user = Auth::user();
            return response()->json([
                'success' => true,
                'message' => 'Hallo ! '.$user->name.' 😊'
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => "Maaf banget bestie, kamu gagal login 😔. Coba periksa email dan password kamu lagi yaa... 😊"
        ], 401);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return response()->json([
            'status'  => true,
            'message' => "Sampai ketemu lagi yaa... 😊"
        ]);
    }
}
