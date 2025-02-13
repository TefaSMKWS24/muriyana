<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function loginkasir(request $request)
    {
if(auth::guard('kasir')->attempt([
    'nik' => $request->nis,
    'password' => $request->password]))
    {
        dd('berhasil: '.auth::guard('kasir')->user());
        log::info('login succeessful');
        //return redirect('/user/dashboarrd');
    }
    else{
        echo "login gagal";
        //return redirect('/user')->with('warninng', 'NIS / password salah');
    }
}

    public function logoutkasir()
    {
        if(auth::guard('kasir')->check()){
            auth::guard('kasir')->logout();
            return redirect('/');
        }
    }
    public function loginadmin(request $request)
    {
        if(Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password]))
            {
                dd('berhasil: '.auth::guard('admin')->user());
                log::info('login successful');
                //return redirect('/user/dashboard');
            }
            else{
                echo "login gagal";
                //return redirect('/user')->with('warninng', 'NIS / password salah');
            }
    }
    public function logoutadmin()
    {
        if(auth::guard('admin')->check()){
            auth::guard('admin')->logout();
            return redirect('/');
        }
    }

}
