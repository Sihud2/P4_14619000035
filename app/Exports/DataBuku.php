<?php

namespace App\Exports;

use App\Buku;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataBuku implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $buku =  DB::table('rak_buku')
        ->join('buku', 'buku.id', '=', 'rak_buku.id_buku')
        ->join('jenis_buku', 'jenis_buku.id', '=', 'rak_buku.id_jenis_buku')
        ->select('rak_buku.id', 'buku.judul', 'buku.tahun_terbit', 'jenis_buku.jenis')->get();
        return $buku;
    }
}
