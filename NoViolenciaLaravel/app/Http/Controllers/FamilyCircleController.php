<?php

namespace App\Http\Controllers;

use App\Models\FamilyCircle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FamilyCircleController extends Controller
{
    public function index(){
        return view('FamilyCircle.index');
    }
    public function store(Request $request){
        $verifyCode = DB::selectOne("call VerifyCode('$request->code');");
        $family = new FamilyCircle();
        $family->user_id = auth()->id();
        $family->code_id = $verifyCode->code_id;
        $family->save();
        redirect()->route('home');
//        return $verifyCode->code_id;
    }

    protected function getData(Request $request)
    {
        $rules = [
            'code'=> 'required|min:9|max:20)',
        ];

        $data = $request->validate($rules);
        return $data;
    }
}
