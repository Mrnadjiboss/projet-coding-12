<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;
use App\Testimonials;

class TestimonialsController extends Controller
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
        $testionials =Testionials::all();
        return view("testimonials.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonials();
        $testimonial-> text = request('text');
        $testimonial-> img_path = request('img_path');
        $testimonial-> name = request('name');
        $testimonial-> link = request('link');
       
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
    public function edit(cr $cr)
    {
        $testimonials = Testionials::all();
        return view("testimonials.edit");
        
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
        $testimonials->img_path = request('img_path');
        $testimonials->text = request('text');
        $testimonials->name = request('name');
        $testimonials->name = request('link');
        $testimonials->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonials $testimonials)
    {
        $testimonials->delete();

        return redirect()->back();
        
    }
}
