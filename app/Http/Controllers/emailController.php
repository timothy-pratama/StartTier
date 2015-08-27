<?php

namespace App\Http\Controllers;

use App\Pesan;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class emailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($username)
    {
        return view('email',compact('username'));
    }

    public function getInbox(Request $request, $nama_perusahaan)
    {
        $cookie = $request->cookie('current_user');
        return view('inbox', compact('nama_perusahaan','cookie'));
    }

    public function getOutbox(Request $request, $nama_perusahaan)
    {
        $cookie = $request->cookie('current_user');
        return view('outbox', compact('nama_perusahaan','cookie'));
    }

    public function getTrashbox(Request $request, $nama_perusahaan)
    {
        $cookie = $request->cookie('current_user');
        return view('trashbox', compact('nama_perusahaan','cookie'));
    }

    public function readEmail(Request $request, $nama_perusahaan)
    {
        $fullUrl = $request->url_callback;

        $pesan = Pesan::find($request->id_message);
        if(!$pesan->read)
        {
            $pesan->read = true;
            $pesan->save();
        }

        $cookie = $request->cookie('current_user');
        $id_pesan = $request->id_message;
        return view('email',compact('cookie','id_pesan','fullUrl'));
    }
}
