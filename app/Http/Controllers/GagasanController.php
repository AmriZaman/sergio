<?php

namespace App\Http\Controllers;

use App\Models\Gagasan;
use Illuminate\Http\Request;

class GagasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/menu administrasi/gagasan', [
            "title" => "Sumbang Gagasan"
        ]);
    }

    public function kid_index()
    {
        return view('admin/menu kid/gagasan_departemen', [
            "title" => "Gagasan Departemen"
        ]);
    }

    public function fasilitator_index()
    {
        return view('admin/menu fasilitator/approval_gagasan', [
            "title" => "Approval Gagasan"
        ]);
    }

    public function manager_index()
    {
        return view('admin/menu manager/verifikasi_gagasan', [
            "title" => "Verifikasi Gagasan"
        ]);
    }

    public function dept_index()
    {
        return view('admin/menu departemen/verifikasi_gagasan', [
            "title" => "Verifikasi Departemen"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/menu administrasi/gagasan_create', [
            "title" => "Tambah Gagasan"
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
        return view('admin/menu administrasi/gagasan_detail', [
            "title" => "Detail Gagasan"
        ]);
    }

    public function kid_show(Gagasan $gagasan)
    {
        return view('admin/menu kid/gagasan_departemen_detail', [
            "title" => "Detail Gagasan Departemen"
        ]);
    }

    public function fasilitator_show(Gagasan $gagasan)
    {
        return view('admin/menu fasilitator/approval_gagasan_detail', [
            "title" => "Detail Approval Gagasan"
        ]);
    }

    public function manager_show(Gagasan $gagasan)
    {
        return view('admin/menu manager/verifikasi_gagasan_detail', [
            "title" => "Detail Verifikasi Gagasan"
        ]);
    }

    public function dept_show(Gagasan $gagasan)
    {
        return view('admin/menu departemen/verifikasi_gagasan_detail', [
            "title" => "Detail Verifikasi Departemen"
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
        return view('admin/menu administrasi/gagasan_edit', [
            "title" => "Edit Gagasan"
        ]);
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
