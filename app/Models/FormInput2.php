<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormInput2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'norm',
        'tanggallahir',
        'alamat',
        'kegawatanpernafasan',
        'kehilangantinusotot',
        'nyeri',
        'bagiannyeri',
        'perlambatansirkulasi',
        'faktorgejalafisik',
        ' faktorgejalafisiklainnya',
         'manajemengejala',
         'orientasispiritual',
         'oleh',
        'perludidoakan',
        'perlubimbinganrohani',
        'perlupendampinganrohani',
        'orangyangdihubungi',
        'siapa',
        'dimana',
        'telp',
        'rencanaperawatan',
        'lingkunganrumah',
        'mampumerawat',
        'siapaygmerawat',
        'perlufasilitas',
        'asesmenreaksipasien',
        'masalahreaksipasien',
        'asesmenreaksikeluarga',
        'masalahreaksikeluarga',
        'kebutuhandukungan',
        'kebutuhandukunganlainnya',
        'kebutuhanalternatif',
        'donasiorgan',
        'kebutuhanalternatiflainnya',
        'asesmenfaktorresiko',
        'masalahfaktorresiko',
        

        
        

    ];
}
