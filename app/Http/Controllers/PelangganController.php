<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kartu;
Use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pelanggan = Pelanggan::all();
        return view ('admin.pelanggan.index',compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kartu = Kartu::all();
        $gender = ['L','P'];
        return view ('admin.pelanggan.create',compact('gender','kartu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Tambah Data menggunakan eloquent
        $pelanggan = new Pelanggan;
        $pelanggan->kode = $request->kode;
        $pelanggan->nama = $request->nama;
        $pelanggan->jk = $request->jk;
        $pelanggan->tmp_lahir = $request->tmp_lahir;
        $pelanggan->tgl_lahir = $request->tgl_lahir;
        $pelanggan->email = $request->email;
        $pelanggan->kartu_id = $request->kartu_id;
        $pelanggan->save();
        return redirect('admin/pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}