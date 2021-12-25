<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use Illuminate\Http\Request;

class PanduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/menu utama/panduan_list', [
            "title" => "Panduan Inovasi"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/menu utama/panduan_create', [
            "title" => "Tambah Panduan"
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
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function show(Panduan $panduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Panduan $panduan)
    {
        return view('admin/menu utama/panduan_edit', [
            "title" => "Edit Panduan"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panduan $panduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panduan $panduan)
    {
        //
    }
}
