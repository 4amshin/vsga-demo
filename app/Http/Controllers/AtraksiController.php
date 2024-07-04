<?php

namespace App\Http\Controllers;

use App\Models\Atraksi;
use App\Http\Requests\StoreAtraksiRequest;
use App\Http\Requests\UpdateAtraksiRequest;

class AtraksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function landingPage() {
        $daftarAtraksi = Atraksi::all();

        return view('landing-page.index', compact('daftarAtraksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    public function pesanProduk(Atraksi $atraksi)
    {
        return view('admin.atraksi.pesan-produk', compact('atraksi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAtraksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Atraksi $atraksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atraksi $atraksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAtraksiRequest $request, Atraksi $atraksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Atraksi $atraksi)
    {
        //
    }
}
