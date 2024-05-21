<?php

namespace App\Http\Controllers;

use App\Models\Enquiries;
use Illuminate\Http\Request;

class EnquiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visitors.inc.header');
    }
    public function store(Request $request)
    {
        $request->validate([
            'person_name' => 'required',
            'contact' => 'required',
            'city' => 'required'
        ]);

        $brand = new Enquiries;
        $brand->person_name = $request->person_name;
        $brand->email = $request->email;
        $brand->contact = $request->contact;
        $brand->city = $request->city;
        $brand->save();

        return redirect()->back()->with('success', 'Your Enquiry was Submitted Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiries $enquiries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiries $enquiries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiries $enquiries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enquiries  $enquiries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiries $enquiries)
    {
        //
    }
}
