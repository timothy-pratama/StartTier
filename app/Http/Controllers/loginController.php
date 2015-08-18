<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
        $pengguna->rating = 0;
        $pengguna->jumlah_pemberi_rating = 0;
        $pengguna->tipe = "investor";
        $pengguna->deskripsi_perusahaan = "";
        $pengguna->video = "";
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
        $pengguna->rating = 0;
        $pengguna->jumlah_pemberi_rating = 0;
        $pengguna->tipe = "startup";
        $pengguna->deskripsi_perusahaan = "";
        $pengguna->video = "";
        $pengguna->save();
        return redirect()->route('login')->with('username',$request->username);
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
}
