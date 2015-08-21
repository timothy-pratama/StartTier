<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class startupController extends Controller
{
    public function index($nama_startup)
    {
        return view('startup.home_startup', compact('nama_startup'));
    }

    public function edit($nama_startup)
    {
        return view('startup.edit_startup', compact('nama_startup'));
    }

    public function editProfilStartup($nama_startup, Request $request)
    {
        $directory = public_path('user_uploaded_files/'.session('current_user')->username);
        $pengguna = session('current_user');

        $nama_startup_edit = $request->nama_startup;
        $alamat_startup_edit = $request->alamat_startup;
        $email_startup_edit = $request->email_startup;
        $video_startup_edit = $request->video_startup;

        if($request->hasFile('logo_startup'))
        {
            $file_logo_startup_edit = $request->file('logo_startup');
            $file_logo_startup_extension = $file_logo_startup_edit->getClientOriginalExtension();
            $file_logo_startup_name = 'logo_startup' . '.' . $file_logo_startup_extension;
            $file_logo_startup_edit->move($directory, $file_logo_startup_name);
            $pengguna->logo_perusahaan = url('/user_uploaded_files/'.$pengguna->username.'/'.$file_logo_startup_name);
        }

        $pengguna->nama_perusahaan = $nama_startup_edit;
        $pengguna->email = $email_startup_edit;
        $pengguna->alamat_perusahaan = $alamat_startup_edit;
        $pengguna->video = $video_startup_edit;
        $pengguna->save();

        Session::put('current_user',$pengguna);

        return redirect()->route('home_startup',['nama_startup'=>$pengguna->nama_perusahaan]);
    }

    public function editDetilStartup(Request $request, $nama_startup)
    {
        $directory = public_path('user_uploaded_files/'.session('current_user')->username);
        $pengguna = session('current_user');

        $deskripsi_startup_edit = $request->deskripsi_startup;

        if($request->hasFile('full_logo_startup'))
        {
            $file_full_logo_startup_edit = $request->file('full_logo_startup');
            $file_full_logo_startup_extension = $file_full_logo_startup_edit->getClientOriginalExtension();
            $file_full_logo_startup_name = 'full_logo_startup' . '.' . $file_full_logo_startup_extension;
            $file_full_logo_startup_edit->move($directory, $file_full_logo_startup_name);
            $pengguna->full_logo_perusahaan = url('/user_uploaded_files/'.$pengguna->username.'/'.$file_full_logo_startup_name);
        }

        $pengguna->deskripsi_perusahaan = $deskripsi_startup_edit;
        $pengguna->save();

        Session::put('current_user',$pengguna);

        return redirect()->route('home_startup',['nama_startup'=>$pengguna->nama_perusahaan]);
    }

    public function editproject($nama_startup, $nama_project)
    {
        return view('startup.edit_startup_project', compact('nama_startup', 'nama_project'));
    }

    public function editPassword($nama_startup, Request $request)
    {
        return view('startup.change_password',compact('nama_startup'));
    }

    public function updatePassword(Request $request)
    {
        $pengguna = Pengguna::where('username','=',session('current_user')->username)->first();
        if(Hash::check($request->old_password,$pengguna->password)) {
            $pengguna->password = Hash::make($request->new_password);
            $pengguna->save();
            return redirect()->route('home_startup',['nama_startup'=>$pengguna->nama_perusahaan])->with('sukses_ganti_password','Password berhasil diganti');
        } else {
            return redirect()->route('startup_edit_password', ['nama_startup'=>$pengguna->nama_perusahaan])->with('error_message', 'Password salah');
        }
    }
}
