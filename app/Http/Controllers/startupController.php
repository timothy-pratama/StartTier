<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class startupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($nama_startup)
    {
        return view('startup.home_startup', compact('nama_startup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
     * @param  string  $nama_startup
     * @return Response
     */
    public function edit($nama_startup)
    {
        return view('startup.edit_startup', compact('nama_startup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $nama_startup
     * @param  string  $nama_project
     * @return Response
     */
    public function editproject($nama_startup, $nama_project)
    {
        return view('startup.edit_startup_project', compact('nama_startup', 'nama_project'));
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
