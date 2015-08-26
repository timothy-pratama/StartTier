<?php

namespace App\Http\Controllers;

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
}
