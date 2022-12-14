<?php

namespace App\Http\Controllers;
use App\Models\Pointeur;
use Illuminate\Http\Request;

class PointeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pointeur::all();
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
    public function store(Request $request)
    {
        $pointeur = new Pointeur;
        $pointeur->firstName = $request->firstName;
        $pointeur->lastName = $request->lastName;
        $pointeur->email = $request->email;
        $pointeur->phone = $request->phone;
        $pointeur->save();
        return ["response"=>"save valide"];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pointeur::find($id);
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
        $pointeur=Pointeur::find($id);
        $pointeur->firstName = $request->firstName;
        $pointeur->lastName = $request->lastName;
        $pointeur->email = $request->email;
        $pointeur->phone = $request->phone;
        $pointeur->save();
        return ["response"=>"Pointeur was updated successfull"];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pointeur=Pointeur::find($id);
        $pointeur->delete();
        return ["response"=>"pointeur was deleted sucessfull"];
    }
}
