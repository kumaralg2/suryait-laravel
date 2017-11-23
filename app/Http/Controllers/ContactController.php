<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/contact-suryaittech');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/contact-suryaittech');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    print_r($request->all());
         $this->validate($request,[
         'name'=>'required|max:20',
         'email'=>'required',
         'message'=>'required'
       ]);
   // dd(request()->all()); 

      if (Contact::create($request->all())) {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Your Message was sent Successfully! Our Support team will contact you soon.');
            return redirect('/contact-suryaittech');
    } else {
        $request->session()->flash('message.level', 'danger');
        $request->session()->flash('message.content', 'Error!');
            return redirect('/contact-suryaittech');
    }
    return redirect('/contact-suryaittech');


        // $dataInput= $request->all();
        // Contact::create($dataInput);
        // return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}
