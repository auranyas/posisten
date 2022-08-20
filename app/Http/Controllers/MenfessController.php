<?php

namespace App\Http\Controllers;

use App\Models\Menfess;
use Illuminate\Http\Request;

class MenfessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menfesses = Menfess::all();
        $menfesses = Menfess::with('menfess')->get();
        
        return view('landing', compact('menfesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menfess');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menfess = new Menfess;
        $menfess->title = $request->get('menfess');
    
        $menfess->save();

        return redirect('menfesses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menfess  $menfess
     * @return \Illuminate\Http\Response
     */
    public function show(Menfess $menfess)
    {
        $menfess = Menfess::find($menfess);

        return view('show', compact('menfess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menfess  $menfess
     * @return \Illuminate\Http\Response
     */
    public function edit(Menfess $menfess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menfess  $menfess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menfess $menfess)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menfess  $menfess
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menfess $menfess)
    {
        //
    }
}
