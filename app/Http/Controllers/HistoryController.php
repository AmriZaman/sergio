<?php

namespace App\Http\Controllers;

use App\Models\Gagasan;
use App\Models\Inovasi;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gagasan_index()
    {
        return view('admin/menu history/history_gagasan', [
            "title" => "History Gagasan"
        ]);
    }

    public function inovasi_index()
    {
        return view('admin/menu history/history_sergio', [
            "title" => "History Sergio"
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
     * @param  \App\Models\Gagasan  $gagasan
     * @return \Illuminate\Http\Response
     */
    public function show(Gagasan $gagasan)
    {
        //
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
