<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        return dd($request);
    }

    public function editDetilStartup($nama_startup)
    {

    }

    public function editproject($nama_startup, $nama_project)
    {
        return view('startup.edit_startup_project', compact('nama_startup', 'nama_project'));
    }
}
