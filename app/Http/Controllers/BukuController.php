<?php

namespace App\Http\Controllers;

use App\Exports\DataBuku;
use Illuminate\Http\Request;
// use App\Http\Controllers\Excel;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku =  DB::table('rak_buku')
        ->join('buku', 'buku.id', '=', 'rak_buku.id_buku')
        ->join('jenis_buku', 'jenis_buku.id', '=', 'rak_buku.id_jenis_buku')
        ->select('buku.judul', 'buku.tahun_terbit', 'jenis_buku.jenis')->get();
        return view('pertemuan4.buku_0035', compact('buku'));
    }

    public function exportdatabuku()
    {
        return Excel::download(new DataBuku, 'databuku_1461900035.xlsx');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
