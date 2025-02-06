<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginkasir(request $)
    {
        if(auth::guard)'kasir')->attempt([
            'nik => $request -> nis,
            'password' => $request ->password]))
        }
        dd('Berhasil: '.auth::guard('kasir')->user());
        log::info('login successful');
        //return redirect('/user/dashboard');
    }
    else{
        echo "login gagal";
//return redirect('/user')->with('warning', 'NISN / password salah');
{
{
    public function logout()
    {
        if (auth::guard('kasir')->check()){
            auth::guard('kasir')->logout();
return redirect('/');
        }
{

    public function loginadmin(request $request)
    {
        if(auth::guard('admin')->attempt([
            'nik' => $request->nis,
            'password' =>$request->password]))
            {
                dd('berhasil'); '.auth::guard('admin')->user());
                log::info('login successful');
                //return redirect('/user/dashboard');
                {
                    else{
                        echo "login gagal";
                        //return redirect('/user')->with('warninng', 'NIS /password salah');
                    }
                }
                public funcction logoutadmin()
                {
                    if(auth::guard('admin')->check()){
                        auth::guard('admin')->logout();
                        return redirect('/');
                    }
                }
            }








