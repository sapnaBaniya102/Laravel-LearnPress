<?php

namespace App\Http\Controllers;

use App\Models\Coursecat;
use Illuminate\Http\Request;

class CoursecatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $coursecat=Coursecat::all();
        return view('admin.coursecat.index',compact('coursecat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.coursecat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(([
            'name'=>'required',
             'status'=>'required',

        ]));

        $coursecat=new coursecat([
            'name'=>$request->get('name'),
                  'status'=>$request->get('status'),
        ]);
        $coursecat->save();
        return redirect()->route('coursecat.index')->with('success','coursecat added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coursecat  $coursecat
     * @return \Illuminate\Http\Response
     */
    public function show(coursecat $coursecat)
    {
          return view('admin.coursecat.show',compact('coursecat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coursecat  $coursecat
     * @return \Illuminate\Http\Response
     */
    public function edit(coursecat $coursecat)
    {
         return view('admin.coursecat.edit',compact('coursecat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coursecat  $coursecat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coursecat $coursecat)
    {
        $request->validate([
            'name'=>'required',
                'status'=>'required',

        ]);
        $coursecat->update($request->all());
        return redirect()->route('coursecat.index')->with('update','coursecat updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coursecat  $coursecat
     * @return \Illuminate\Http\Response
     */
    public function destroy(coursecat $coursecat)
    {
         $coursecat->delete();
        return redirect('coursecat')->with('delete', 'Deleted successfully');
    }
}
