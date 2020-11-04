<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $idUser = Auth::user()->id;
        $code_id = DB::selectOne(" call PACodeUser($idUser)");
        if ($code_id ===null){
            return view('home',compact('code_id'));
        }

        $familyCircle = DB::select("call PAfamilyCircle($code_id->code_id);");
        return view('home',compact('familyCircle','code_id'));


    }


}
