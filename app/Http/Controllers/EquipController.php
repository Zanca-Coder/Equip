<?php

namespace App\Http\Controllers;

use App\Models\Equip;
use Illuminate\Http\Request;

class EquipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('equips',['equips'=>Equip::all()]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equip  $equip
     * @return \Illuminate\Http\Response
     */
    public function show(Equip $equip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equip  $equip
     * @return \Illuminate\Http\Response
     */
    public function edit(Equip $equip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equip  $equip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equip $equip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equip  $equip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equip $equip)
    {
        //
    }
}
