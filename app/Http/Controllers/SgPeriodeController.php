<?php

namespace App\Http\Controllers;

use App\Models\Sg_periode;
use Illuminate\Http\Request;

class SgPeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/menu administrasi/periode', [
            "title" => "Periode"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/menu administrasi/periode_create_sg', [
            "title" => "Tambah Periode SG"
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
     * @param  \App\Models\Sg_periode  $sg_periode
     * @return \Illuminate\Http\Response
     */
    public function show(Sg_periode $sg_periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sg_periode  $sg_periode
     * @return \Illuminate\Http\Response
     */
    public function edit(Sg_periode $sg_periode)
    {
        return view('admin/menu administrasi/periode_edit_sg', [
            "title" => "Edit Periode SG"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sg_periode  $sg_periode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sg_periode $sg_periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sg_periode  $sg_periode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sg_periode $sg_periode)
    {
        //
    }
}
