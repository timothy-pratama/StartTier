<?php

namespace App\Http\Controllers;

use App\Komentar;
use App\Pengguna;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

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

    public function profile_startup(Request $request, $nama_startup)
    {
        $cookie = $request->cookie('current_user');
        $id_user = $request->id;
        return view('profile_startup',compact('nama_startup','cookie','id_user'));
    }

    public function profile_investor(Request $request, $nama_investor)
    {
        $cookie = $request->cookie('current_user');
        $id_user = $request->id;
        return view('profile_investor',compact('nama_investor','cookie','id_user'));
    }

    public function addKomentar(Request $request)
    {
        $user = Pengguna::find($request->id_user);
        if(Hash::check($user->username,$request->transaction_token)) {
            $komentar = new Komentar();
            $komentar->id_user = $request->id_user;
            $komentar->email_komentator = $request->email_komentator;
            $komentar->nama_komentator = $request->nama_komentator;
            $komentar->komentar = $request->review_komentator;
            $komentar->rating_score = $request->rating_score;
            $komentar->save();

            $user->jumlah_pemberi_rating = $user->komentars()->count();
            $user->rating = $user->komentars()->avg('rating_score');
            $user->save();
            return redirect($request->url_callback)->with('komentar_success_message','ok');
        }
    }

    public function searchProfile(Request $request)
    {
        $cookie = $request->cookie('current_user');
        $query = '%'.$request->input('query').'%';
        return view('search_result',compact('cookie','query'));
    }
}
