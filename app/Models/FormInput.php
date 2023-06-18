<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormInput extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'norm',
        'tanggallahir',
        'alamat',
        'dpjp',
        'dokterkonsulan',
        'diagnosa',
        'riwayatalergi',
        'alasanpindahruangan',
        'tanggalmasuk',
        'jampindah',
        'pindahkeruang',
        'keluhansebelum',
        'keluhansesudah',
        'keadaanumum',
        'keadaanumum1',
        'kesadaranesebelum',
        'kesadaranesesudah',
        'kesadaranvsebelum',
        'kesadaranvsesudah',
        'kesadaranmsebelum',
        'kesadaranmsesudah',
        'kesadaransebelum',
        'kesadaransesudah',
        'tdsebelum',
        'tdsesudah',
        'nsebelum',
        'nsesudah',
        'rsebelum',
        'rsesudah',
        'sbsebelum',
        'sbsesudah',
        'skalanyerisebelum',
        'skalanyerisesudah',
        'lokasisebelum',
        'lokasisesudah',
        'resikojatuhsebelum',
        'resikojatuhsesudah',
        'infussebelum',
        'tanggalpemasangansebelum',
        'dcsebelum',        
        'tanggalpemasangandcsebelum',
        'injeksiyangdiberikan',
        'tindakanmedisyangdilakukan',
        'informasikhusus',
        'pemberianobat',
        'hasillabo',  
        'hasilradio', 
        'persetujuan',  

        

    ];
}
