<?php

namespace App\Http\Controllers;

use App\Models\Inovasi;
use Illuminate\Http\Request;

class InovasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/menu administrasi/gugus', [
            "title" => "Gugus"
        ]);
    }
    public function kid_index()
    {
        return view('admin/menu kid/approval_sergio', [
            "title" => "Approval Sergio"
        ]);
    }
    public function ss_index()
    {
        return view('admin/menu rekap/sistem_saran', [
            "title" => "SS"
        ]);
    }

    public function gio_index()
    {
        return view('admin/menu rekap/gio', [
            "title" => "GIO"
        ]);
    }

    public function gim_index()
    {
        return view('admin/menu rekap/gim', [
            "title" => "GIM"
        ]);
    }

    public function fr_index()
    {
        return view('admin/menu rekap/5r', [
            "title" => "5R"
        ]);
    }

    public function ranking_index()
    {
        return view('admin/menu rekap/ranking', [
            "title" => "Ranking Sergio"
        ]);
    }

    public function grafik_index()
    {
        return view('admin/menu rekap/grafik', [
            "title" => "Grafik Sergio"
        ]);
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
     * @param  \App\Models\Inovasi  $inovasi
     * @return \Illuminate\Http\Response
     */
    public function show(Inovasi $inovasi)
    {
        return view('admin/menu administrasi/gugus_detail', [
            "title" => "Detail Gugus"
        ]);
    }
    public function kid_show(Inovasi $inovasi)
    {
        return view('admin/menu kid/approval_sergio_detail', [
            "title" => "Detail Approval Sergio"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inovasi  $inovasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Inovasi $inovasi)
    {
        return view('admin/menu administrasi/gugus_edit', [
            "title" => "Edit Gugus"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inovasi  $inovasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inovasi $inovasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inovasi  $inovasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inovasi $inovasi)
    {
        //
    }
}
