<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CRUD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Poets = DB::table('Poets')
        ->orderBy('poetcode')
        ->get();
        return view('crud.showpoets', [
            'Poets' => $Poets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.altapoets');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Poets = DB::table('Poets')
        ->insert([
            'poetcode'=>$request->input('poetcode'),
            'firstname'=>$request->input('firstname'),
            'surname'=>$request->input('surname'),
            'adress'=>$request->input('adress'),
            'postcode'=>$request->input('postcode'),
            'telephonenumber'=>$request->input('telephonenumber')
        ]);
        return redirect()->action('Crud@index')
        ->with('status','Succesful Insertion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Poets =  DB::table('Poets')
        ->where('poetcode', '=', $id)
        ->first();
        return view('crud.altapoets', ['Poets' => $Poets]);
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
        $Poets = DB::table('Poets')
        ->where('poetcode', '=', $request->input('id'))
        ->update([
            'poetcode'=>$request->input('poetcode'),
            'firstname'=>$request->input('firstname'),
            'surname'=>$request->input('surname'),
            'adress'=>$request->input('adress'),
            'postcode'=>$request->input('postcode'),
            'telephonenumber'=>$request->input('telephonenumber')
        ]);
        return redirect()->action('Crud@index')
        ->with('status','Succesful Modification');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Poets = DB::table('Poets')
        ->where('poetcode', '=', $id)
        ->delete();
        return redirect()->action('Crud@index')
        ->with('status','Succesful Destruction');
    }
}
