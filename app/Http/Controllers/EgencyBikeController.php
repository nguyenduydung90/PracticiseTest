<?php

namespace App\Http\Controllers;

use App\Models\EgencyBike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EgencyBikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $egency=EgencyBike::all();
        return view('manage',compact('egency'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $egency=new EgencyBike();
        $egency->fill($request->all());
        $egency->egency_name=$request->egency_name;
        $egency->status=$request->status;
        $egency->save();
        return redirect()->route('index');
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
        $egency=EgencyBike::findOrFail($id);
        return view('edit',compact('egency'));
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
        $egency=EgencyBike::findOrFail($id);
        $egency->fill($request->all());
        $egency->egency_name=$request->egency_name;
        $egency->save();
        return redirect()->route('index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $egency=EgencyBike::findOrFail($id);
        $egency->delete();
        return redirect()->route('index');
    }

    public function search(Request $request)
    {
        $egency=DB::table('agencybike')->where('egency_name','LIKE','%'.$request->keyword.'%')
            ->orWhere('status','LIKE','%'.$request->keyword.'%')
            ->orWhere('manage','LIKE','%'.$request->keyword.'%')
            ->orWhere('address','LIKE','%'.$request->keyword.'%')
            ->orWhere('address','LIKE','%'.$request->keyword.'%')
            ->get();

        return view('search',compact('egency'));
    }
}
