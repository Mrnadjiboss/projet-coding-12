<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;
use App\Avantages;

class AvantagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $avantages =Avantages::all();
        return view("avantages.create", compact("avantages"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avantage = new Avantages();
        $avantage-> title = request("title");
       
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $avantages = Avantages::find($id);
        return view("avantages.edit");
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        
        $avantages-> title = request('title');
        

        $avantages->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avantages $avantages)
    {
        $avantages->delete();

        return redirect()->back();
        
    }
    
    public function __construct() {
        $this->middleware('isConnected');
    }
}

