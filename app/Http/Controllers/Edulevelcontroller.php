<?php

namespace App\Http\Controllers;

use App\Models\edulevel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Edulevelcontroller extends Controller
{
    public function data ()
    {
        $edulevels = DB::table('edulevels')->get();
        return view('edulevel.data', ['edulevels'=> $edulevels]);
    }

    public function add(){
        return view ('edulevel.add');
    }
    public function addprocess(Request $request){
        DB::table('edulevels')->insert([
            'name' => $request->name ,
            'desc' => $request->desc
        ]);
        return redirect('edulevels')->with('status','data berhasil ditambahkan');
    }
}
