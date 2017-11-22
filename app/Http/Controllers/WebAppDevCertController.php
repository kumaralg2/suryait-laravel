<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Registerstudent;

class WebAppDevCertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/web-app-certification-course-create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('/web-app-certification-course-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //print_r($request->all());
         $this->validate($request,[
         'student_name'=>'required|max:20',
         'email'=>'required'
       ]);
    //    dd(request()->all()); 

      if (RegisterStudent::create($request->all())) {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Your Registration was Successfull! Please make the payment to get your Certificate.');
            return redirect('/web-app-certification-course-create-paynow');
    } else {
        $request->session()->flash('message.level', 'danger');
        $request->session()->flash('message.content', 'Error!');
            return redirect('/web-app-certification-course-create');
    }
    return redirect('/web-app-certification-course-create');


        // $dataInput= $request->all();
        // RegisterStudent::create($dataInput);
        // return 'success';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
