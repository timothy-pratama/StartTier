<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Carbon\Carbon;
use Faker\Provider\tr_TR\DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function register_startup()
    {
        return view('register_startup');
    }

    public function register_investor()
    {
        return view('register_investor');
    }

    public function createInvestor(Request $request)
    {
        $pengguna = new Pengguna();
        $pengguna->username = $request->username;
        $pengguna->password = Hash::make($request->password);
        $pengguna->nama_perusahaan = $request->namaPerusahaan;
        $pengguna->alamat_perusahaan = $request->alamatPerusahaan;
        $pengguna->email = $request->email;
        $pengguna->tipe = "investor";
        $pengguna->save();
        return redirect()->route('login')->with('username',$request->username);
    }

    public function createStartup(Request $request)
    {
        $pengguna = new Pengguna();
        $pengguna->username = $request->username;
        $pengguna->password = Hash::make($request->password);
        $pengguna->nama_perusahaan = $request->namaStartup;
        $pengguna->alamat_perusahaan = $request->alamatStartup;
        $pengguna->email = $request->email;
        $pengguna->tipe = "startup";
        $pengguna->save();
        return redirect()->route('login')->with('username',$request->username);
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $pengguna = Pengguna::where('username',$username)->first();
        if(is_null($pengguna))
        {
            return redirect()->route('login')->with('login_error','Username atau password salah.');
        }
        else
        {
            if($request->has('rememberMe'))
            {
                $cookie = Cookie::forever('current_user', $username);
            }
            else
            {
                $cookie = Cookie::make('current_user', $username, 0);
            }

            if (Hash::check($password, $pengguna->password)) {
                $request->session()->put('current_user',$pengguna);
                if(strcmp($pengguna->tipe,'startup') == 0)
                {
                    return redirect()->route('home_startup',['nama_startup'=>$pengguna->nama_perusahaan])->withCookie($cookie);
                }
                else
                {
                    return redirect()->route('home_investor',['nama_investor'=>$pengguna->nama_perusahaan])->withCookie($cookie);
                }
            }
            else
            {
                return redirect()->route('login')->with('login_error','Username atau password salah.');
            }
        }
    }

    public function logout()
    {
        $cookie = Cookie::forget('current_user');
        Session::forget('current_user');
        return redirect()->route('home')->withCookie($cookie)->with("successful_logout_message","Anda berhasil logout.");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function checkUser(Request $request)
    {
        $username = $request->username;
        $pengguna = Pengguna::where('username',$username)->first();
        if(is_null($pengguna))
        {
            echo 'available';
        }
        else
        {
            echo 'unavailable';
        }
    }
}
