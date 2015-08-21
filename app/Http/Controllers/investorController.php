<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class investorController extends Controller
{
    public function index($nama_investor)
    {
        return view('investor.home_investor',compact('nama_investor'));
    }

    public function edit($nama_investor)
    {
        return view('investor.edit_investor',compact('nama_investor'));
    }

    public function editProfilInvestor(Request $request, $nama_investor)
    {
        $directory = public_path('user_uploaded_files/'.session('current_user')->username);
        $pengguna = session('current_user');

        $nama_investor_edit = $request->nama_perusahaan;
        $alamat_investor_edit = $request->alamat_perusahaan;
        $email_investor_edit = $request->email_perusahaan;

        if($request->hasFile('logo_perusahaan'))
        {
            $file_logo_investor_edit = $request->file('logo_perusahaan');
            $file_logo_investor_extension = $file_logo_investor_edit->getClientOriginalExtension();
            $file_logo_investor_name = 'logo_investor' . '.' . $file_logo_investor_extension;
            $file_logo_investor_edit->move($directory, $file_logo_investor_name);
            $pengguna->logo_perusahaan = url('/user_uploaded_files/'.$pengguna->username.'/'.$file_logo_investor_name);
        }

        $pengguna->nama_perusahaan = $nama_investor_edit;
        $pengguna->alamat_perusahaan = $alamat_investor_edit;
        $pengguna->email = $email_investor_edit;
        $pengguna->save();

        Session::put('current_user',$pengguna);

        return redirect()->route('home_investor',['nama_investor'=>$pengguna->nama_perusahaan]);
    }

    public function editDetilInvestor(Request $request, $nama_investor)
    {
        $directory = public_path('user_uploaded_files/'.session('current_user')->username);
        $pengguna = session('current_user');

        $deskripsi_investor_edit = $request->deskripsi_perusahaan;

        if($request->hasFile('full_logo_perusahaan'))
        {
            $file_full_logo_investor_edit = $request->file('full_logo_perusahaan');
            $file_full_logo_investor_extension = $file_full_logo_investor_edit->getClientOriginalExtension();
            $file_full_logo_investor_name = 'full_logo_investor' . '.' . $file_full_logo_investor_extension;
            $file_full_logo_investor_edit->move($directory, $file_full_logo_investor_name);
            $pengguna->full_logo_perusahaan = url('/user_uploaded_files/'.$pengguna->username.'/'.$file_full_logo_investor_name);
        }

        $pengguna->deskripsi_perusahaan = $deskripsi_investor_edit;
        $pengguna->save();

        Session::put('current_user',$pengguna);

        return redirect()->route('home_investor',['nama_investor'=>$pengguna->nama_perusahaan]);
    }

    public function changePassword(Request $request, $nama_investor)
    {
        return view('investor.change_password',compact('nama_investor'));
    }

    public function updatePassword(Request $request)
    {
        $pengguna = Pengguna::where('username','=',session('current_user')->username)->first();
        if(Hash::check($request->old_password,$pengguna->password)) {
            $pengguna->password = Hash::make($request->new_password);
            $pengguna->save();
            return redirect()->route('home_investor',['nama_investor'=>$pengguna->nama_perusahaan])->with('sukses_ganti_password','Password berhasil diganti');
        } else {
            return redirect()->route('investor_ganti_password', ['nama_investor'=>$pengguna->nama_perusahaan])->with('error_message', 'Password salah');
        }
    }
}
