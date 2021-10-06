<?php

namespace App\Http\Controllers;

use App\Models\Wcs;
use Illuminate\Http\Request;

class WcsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $wcs=Wcs::all();
        return view('admin.wcs.index',compact('wcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.wcs.create');
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
            'heading'=>'required',
              'text'=>'required',
                  'status'=>'required',

        ]));

        $wcs=new wcs([
            'heading'=>$request->get('heading'),
              'text'=>$request->get('text'),
                  'status'=>$request->get('status'),
        ]);
        $wcs->save();
        return redirect()->route('wcs.index')->with('success','wcs added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wcs  $wcs
     * @return \Illuminate\Http\Response
     */
    public function show(wcs $wcs)
    {
          return view('admin.wcs.show',compact('wcs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wcs  $wcs
     * @return \Illuminate\Http\Response
     */
    public function edit(wcs $wcs)
    {
         return view('admin.wcs.edit',compact('wcs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wcs  $wcs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wcs $wcs)
    {
        $request->validate([
            'heading'=>'required',
            'text'=>'required',
                'status'=>'required',

        ]);
        $wcs->update($request->all());
        return redirect()->route('wcs.index')->with('update','wcs updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wcs  $wcs
     * @return \Illuminate\Http\Response
     */
    public function destroy(wcs $wcs)
    {
         $wcs->delete();
        return redirect('wcs')->with('delete', 'Deleted successfully');
    }
}
