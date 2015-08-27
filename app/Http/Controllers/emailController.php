<?php

namespace App\Http\Controllers;

use App\Pesan;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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

    public function softDelete(Request $request)
    {
        if(Hash::check(session('current_user')->username.session('current_user')->password,$request->token)) {
            $ids = $request->ids;
            $ids = explode(',', $ids);
            foreach($ids as $id)
            {
                $pesan = Pesan::find($id);
                $pesan->box = 'trashbox';
                $pesan->save();
            }
            return ('ok');
        } else {
            return ('error');
        }
    }

    public function hardDelete(Request $request)
    {
        if(Hash::check(session('current_user')->username.session('current_user')->password,$request->token)) {
            $ids = $request->ids;
            $ids = explode(',', $ids);
            foreach($ids as $id)
            {
                $pesan = Pesan::destroy($id);
            }
            return ('ok');
        } else {
            return ('error');
        }
    }

    public function restoreEmail(Request $request)
    {
        $current_user = session('current_user');
        if(Hash::check($current_user->username.$current_user->password,$request->token)) {
            $ids = $request->ids;
            $ids = explode(',', $ids);
            foreach($ids as $id)
            {
                $pesan = Pesan::find($id);
                if($pesan->id_sender == $current_user->id_user)
                {
                    $pesan->box = 'outbox';
                } else {
                    $pesan->box = 'inbox';
                }
                $pesan->save();
            }
            return ('ok');
        } else {
            return ('error');
        }
    }
}
