<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CodeController extends Controller
{
    public function index(){
        $idUser = Auth::user()->id;
        $code = DB::select("call PACodeUser($idUser)");
        return view('Code.indexCode',compact('code'));
    }
}
