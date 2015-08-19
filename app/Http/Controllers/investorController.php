<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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

    public function editProfilInvestor($nama_investor)
    {

    }

    public function editDetilInvestor($nama_investor)
    {

    }
}
