<?php

namespace App\Http\Controllers;

use App\Models\Srg_periode;
use Illuminate\Http\Request;

class SrgPeriodeController extends Controller
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
        return view('admin/menu administrasi/periode_create_sergio', [
            "title" => "Tambah Periode Sergio"
        ]);
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
     * @param  \App\Models\Srg_periode  $srg_periode
     * @return \Illuminate\Http\Response
     */
    public function show(Srg_periode $srg_periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Srg_periode  $srg_periode
     * @return \Illuminate\Http\Response
     */
    public function edit(Srg_periode $srg_periode)
    {
        return view('admin/menu administrasi/periode_edit_sergio', [
            "title" => "Edit Periode Sergio"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Srg_periode  $srg_periode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Srg_periode $srg_periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Srg_periode  $srg_periode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Srg_periode $srg_periode)
    {
        //
    }
}
