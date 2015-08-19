<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class guestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cookie = Cookie::get('current_user');
        return view('index',compact('cookie'));
    }

    public function list_startup()
    {
        $cookie = Cookie::get('current_user');
        return view('list_startup', compact('cookie'));
    }

    public function list_investor()
    {
        $cookie = Cookie::get('current_user');
        return view('list_investor', compact('cookie'));
    }

    public function profile_startup($nama_startup)
    {
        return view('profile_startup',compact('nama_startup'));
    }

    public function profile_investor($nama_investor)
    {
        return view('profile_investor',compact('nama_investor'));
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
