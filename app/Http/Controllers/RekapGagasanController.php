<?php

namespace App\Http\Controllers;

use App\Models\Gagasan;
use Illuminate\Http\Request;

class RekapGagasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/menu rekap/sumbang_gagasan', [
            "title" => "Rekap Sumbang Gagasan"
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

    public function create_sergio()
    {
        return view('admin/menu rekap/sumbang_gagasan_daftar', [
            "title" => "Daftarkan Sumbang Gagasan"
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
     * @param  \App\Models\Gagasan  $gagasan
     * @return \Illuminate\Http\Response
     */
    public function show(Gagasan $gagasan)
    {
        return view('admin/menu rekap/sumbang_gagasan_detail', [
            "title" => "Detail Sumbang Gagasan"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gagasan  $gagasan
     * @return \Illuminate\Http\Response
     */
    public function edit(Gagasan $gagasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gagasan  $gagasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gagasan $gagasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gagasan  $gagasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gagasan $gagasan)
    {
        //
    }
}
