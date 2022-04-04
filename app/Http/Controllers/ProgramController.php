<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\edulevel;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
        //return $program;
        return view('program/index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edulevels = edulevel::all();
       return view('program.create',compact('edulevels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programs = new Program;
 
        $programs->name = $request->name;
        $programs->edulevel_id = $request->edulevel_id;
        $programs->tahun_kelahiran = $request->tahun_kelahiran;
        $programs->tahun_kelulusan = $request->tahun_kelulusan;
        $programs->info = $request->info;
        $programs->save();
        return redirect('programs')->with('status','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        $edulevels = edulevel::all();
        return view('program.edit',compact('program','edulevels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
         Program::destroy($program->id);
         return redirect('programs')->with('status','data berhasil dihapus');
    }
}
