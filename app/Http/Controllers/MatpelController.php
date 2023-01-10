<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Matpel;
use Illuminate\Http\Request;

class MatpelController extends Controller
{
    public function index()
    {
        $matpel = Matpel::with('guru')->get();
        if($request->has('search')){
            $matpel = Matpel::where('mata_pelajaran','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $matpel = Matpel::paginate(5);
        }
        return view('dashboard/matpel', compact(['matpel'])); 
    }

    public function create()
    {
        $pengajar = User::all();
        return view('dashboard/tambahmatpel', compact(['pengajar']));
    }

    public function store(Request $request)
    {
        
    }

    public function show(Matpel $matpel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matpel  $matpel
     * @return \Illuminate\Http\Response
     */
    public function edit(Matpel $matpel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matpel  $matpel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matpel $matpel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matpel  $matpel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matpel $matpel)
    {
        //
    }
}
