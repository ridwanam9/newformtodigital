<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToFormDigital | Tansfer Intra Rumah Sakit</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css?v=3.2.0')}}">
    <script nonce="f0d636cc-6902-47c0-85e3-1ca984c771a8">
    (function(w, d) {
        ! function(bv, bw, bx, by) {
            bv[bx] = bv[bx] || {};
            bv[bx].executed = [];
            bv.zaraz = {
                deferred: [],
                listeners: []
            };
            bv.zaraz.q = [];
            bv.zaraz._f = function(bz) {
                return function() {
                    var bA = Array.prototype.slice.call(arguments);
                    bv.zaraz.q.push({
                        m: bz,
                        a: bA
                    })
                }
            };
            for (const bB of ["track", "set", "debug"]) bv.zaraz[bB] = bv.zaraz._f(bB);
            bv.zaraz.init = () => {
                var bC = bw.getElementsByTagName(by)[0],
                    bD = bw.createElement(by),
                    bE = bw.getElementsByTagName("title")[0];
                bE && (bv[bx].t = bw.getElementsByTagName("title")[0].text);
                bv[bx].x = Math.random();
                bv[bx].w = bv.screen.width;
                bv[bx].h = bv.screen.height;
                bv[bx].j = bv.innerHeight;
                bv[bx].e = bv.innerWidth;
                bv[bx].l = bv.location.href;
                bv[bx].r = bw.referrer;
                bv[bx].k = bv.screen.colorDepth;
                bv[bx].n = bw.characterSet;
                bv[bx].o = (new Date).getTimezoneOffset();
                if (bv.dataLayer)
                    for (const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ, bK) => ({
                            ...bJ[1],
                            ...bK[1]
                        }))))) zaraz.set(bI[0], bI[1], {
                        scope: "page"
                    });
                bv[bx].q = [];
                for (; bv.zaraz.q.length;) {
                    const bL = bv.zaraz.q.shift();
                    bv[bx].q.push(bL)
                }
                bD.defer = !0;
                for (const bM of [localStorage, sessionStorage]) Object.keys(bM || {}).filter((bO => bO
                    .startsWith("_zaraz_"))).forEach((bN => {

                    try {
                        bv[bx]["z_" + bN.slice(7)] = JSON.parse(bM.getItem(bN))
                    } catch {
                        bv[bx]["z_" + bN.slice(7)] = bM.getItem(bN)
                    }
                }));
                bD.referrerPolicy = "origin";
                bD.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bv[bx])));
                bC.parentNode.insertBefore(bD, bC)
            };
            ["complete", "interactive"].includes(bw.readyState) ? zaraz.init() : bv.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">



        @extends('layouts.master')
        @section('content')
        {{-- message --}}
        {!! Toastr::message() !!}
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="content-wrapper">

                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1>Transfer Intra Rumah Sakit</h1>

                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a
                                                href="{{ route('dashboard/page') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Transfer Intra Rumah Sakit</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section>



                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-primary w-100">
                                        
                                        <div class="card-body">
                                            <form action="{{route('form/input/save')}}" method="post">
                                                @csrf
                                                <h3><strong>Data Diri</strong></h3>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                    <div class="form-group">
                                                    <strong><label for="nama" style="font-size:16px">Nama</label></strong>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                    <div class="form-group">
                                                    <strong><label for="norm" style="font-size:16px">No Rekam Medis</label></strong>
                                                        <input type="text" class="form-control" id="norm" name="norm">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="tanggallahir" style="font-size:16px">Tanggal
                                                                Lahir</label></strong>
                                                            <input type="date" class="form-control" id="tanggallahir"
                                                                name="tanggallahir">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="alamat" style="font-size:16px">Alamat</label></strong>
                                                            <input type="text" class="form-control" id="alamat"
                                                                name="alamat">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <h3><strong>Data Transfer</strong></h3>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="dpjp" style="font-size:16px">DPJP</label></strong>
                                                            <input type="text" class="form-control" id="dpjp"
                                                                name="dpjp">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="dokterkonsulan" style="font-size:16px">Dokter
                                                                Konsultan</label></strong>
                                                            <input type="text" class="form-control" id="dokterkonsulan"
                                                                name="dokterkonsulan">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="diagnosa"
                                                                style="font-size:16px">Diagnosa</label></strong>
                                                            <input type="text" class="form-control" id="diagnosa"
                                                                name="diagnosa">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="riwayatalergi" style="font-size:16px">Riwayat
                                                                Alergi</label></strong>
                                                            <input type="text" class="form-control" id="riwayatalergi"
                                                                name="riwayatalergi">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="alasanpindahruangan"
                                                                style="font-size:16px">Alasan Pindah
                                                                Ruangan</label></strong>
                                                            <input type="text" class="form-control"
                                                                id="alasanpindahruangan" name="alasanpindahruangan">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="tanggalmasuk" style="font-size:16px">Tanggal
                                                                Masuk</label></strong>
                                                            <input type="date" class="form-control" id="tanggalmasuk"
                                                                name="tanggalmasuk">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="ruang" style="font-size:16px">Ruang</label></strong>
                                                            <input type="text" class="form-control" id="ruang"
                                                                name="ruang">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="tanggalpindah" style="font-size:16px">Tanggal
                                                                Pindah</label></strong>
                                                            <input type="date" class="form-control" id="tanggalpindah"
                                                                name="tanggalpindah">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="jampindah" style="font-size:16px">Jam
                                                                Pindah</label></strong>
                                                            <input type="time" class="form-control" id="jampindah"
                                                                name="jampindah">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <strong><label for="pindahkeruang" style="font-size:16px">Pindah Ke
                                                                Ruang</label></strong>
                                                            <input type="text" class="form-control" id="pindahkeruang"
                                                                name="pindahkeruang">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3><strong>Kondisi Pasien</strong></h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h4>Sebelum Transfer</h4>
                                                    <div class="form-group">
                                                        <label for="keluhansebelum">Keluhan</label>
                                                        <input type="text" class="form-control" id="keluhansebelum"
                                                            name="keluhansebelum">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="keadaanumum">Keadaan Umum</label>
                                                        <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="keadaanumum" value="Baik" id="baiksebelum">
                                                            <label class="form-check-label"
                                                                for="baiksebelum">Baik</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="keadaanumum" value="Tampak Sakit"
                                                                id="tampaksakitsebelum">
                                                            <label class="form-check-label"
                                                                for="tampaksakitsebelum">Tampak Sakit</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="keadaanumum" value="Sesak Nafas"
                                                                id="sesaknafassebelum">
                                                            <label class="form-check-label"
                                                                for="sesaknafassebelum">Sesak Nafas</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="keadaanumum" value="Pucat" id="pucatsebelum">
                                                            <label class="form-check-label"
                                                                for="pucatsebelum">Pucat</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="keadaanumum" value="Lemah" id="lemahsebelum">
                                                            <label class="form-check-label"
                                                                for="lemahsebelum">Lemah</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <strong><label for="kesadaransebelum"
                                                                    style="font-size:16px">Kesadaran</label>
                                                                <div class="form-row">
                                                            </strong>
                                                            <div class="col">
                                                                <label for="eyesebelum">Eye</label>
                                                                <input type="text" class="form-control" id="eyesebelum"
                                                                    name="kesadaranesebelum">
                                                            </div>
                                                            <div class="col">
                                                                <label for="verbalsebelum">Verbal</label>
                                                                <input type="text" class="form-control"
                                                                    id="verbalsebelum" name="kesadaranvsebelum">
                                                            </div>
                                                            <div class="col">
                                                                <label for="motoriksebelum">Motorik</label>
                                                                <input type="text" class="form-control"
                                                                    id="motoriksebelum" name="kesadaranmsebelum">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransebelum" value="Composmentis"
                                                            id="composmentissebelum">
                                                        <label class="form-check-label" for="composmentissebelum">Compos
                                                            Mentis</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransebelum" value="Apatis" id="apatissebelum">
                                                        <label class="form-check-label"
                                                            for="apatissebelum">Apatis</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransebelum" value="Somnolen"
                                                            id="somnolensebelum">
                                                        <label class="form-check-label"
                                                            for="somnolensebelum">Somnolen</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransebelum" value="Delerium"
                                                            id="deleriumsebelum">
                                                        <label class="form-check-label"
                                                            for="deleriumsebelum">Delerium</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransebelum" value="Soporoscoma"
                                                            id="soporoscomasebelum">
                                                        <label class="form-check-label" for="soporoscomasebelum">Soporos
                                                            Coma</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransebelum" value="Coma" id="comasebelum">
                                                        <label class="form-check-label" for="comasebelum">Coma</label>
                                                    </div>
                                                </div>
                                                <strong><label for="vitalsignsebelum" style="font-size:16px">Vital
                                                        Sign</label></strong>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control" id="tdsebelum"
                                                            name="tdsebelum" placeholder="TD..../.....">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control" id="nsebelum"
                                                            name="nsebelum" placeholder="N....x/menit">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control" id="rsebelum"
                                                            name="rsebelum" placeholder="R....x/menit">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control" id="sbsebelum"
                                                            name="sbsebelum" placeholder="Sb....">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        <strong><label for="skalanyerisebelum"
                                                                style="font-size:16px">Skala
                                                                Nyeri</label></strong>
                                                        <input type="text" class="form-control" id="skalanyerisebelum"
                                                            name="skalanyerisebelum">
                                                    </div>
                                                    <div class="col">
                                                        <strong><label for="lokasisebelum"
                                                                style="font-size:16px">Lokasi</label></strong>
                                                        <input type="text" class="form-control" id="lokasisebelum"
                                                            name="lokasisebelum">
                                                    </div>
                                                </div><br>
                                                <strong><label for="resikojatuhsebelum" style="font-size:16px">Resiko
                                                        Jatuh</label></strong>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="resikojatuhsebelum" value="Rendah" id="rendahsebelum">
                                                    <label class="form-check-label" for="rendahsebelum">Rendah</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="resikojatuhsebelum" value="Sedang" id="sedangsebelum">
                                                    <label class="form-check-label" for="sedangsebelum">Sedang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="resikojatuhsebelum" value="Tinggi" id="tinggisebelum">
                                                    <label class="form-check-label" for="tinggisebelum">Tinggi</label>
                                                </div>
                                            </div>



                                            <div class="col-sm-6">
                                                <h4>Sesudah Transfer</h4>
                                                <div class="form-group">
                                                    <label for="keluhansesudah">Keluhan</label>
                                                    <input type="text" class="form-control" id="keluhansesudah"
                                                        name="keluhansesudah">
                                                </div>
                                                <div class="form-group">
                                                    <label for="keadaanumum1">Keadaan Umum</label>
                                                    <br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="keadaanumum1"
                                                            value="Baik" id="baiksesudah">
                                                        <label class="form-check-label" for="baiksesudah">Baik</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="keadaanumum1"
                                                            value="Tampak Sakit" id="tampaksakitsesudah">
                                                        <label class="form-check-label" for="tampaksakitsesudah">Tampak
                                                            Sakit</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="keadaanumum1"
                                                            value="Sesak Nafas" id="sesaknafassesudah">
                                                        <label class="form-check-label" for="sesaknafassesudah">Sesak
                                                            Nafas</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="keadaanumum1"
                                                            value="Pucat" id="pucatsesudah">
                                                        <label class="form-check-label" for="pucatsesudah">Pucat</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="keadaanumum1"
                                                            value="Lemah" id="lemahsesudah">
                                                        <label class="form-check-label" for="lemahsesudah">Lemah</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <strong><label for="kesadaransesudah"
                                                                style="font-size:16px">Kesadaran</label></strong>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label for="eyesesudah">Eye</label>
                                                                <input type="text" class="form-control" id="eyesesudah"
                                                                    name="kesadaranesesudah">
                                                            </div>
                                                            <div class="col">
                                                                <label for="verbalsesudah">Verbal</label>
                                                                <input type="text" class="form-control"
                                                                    id="verbalsesudah" name="kesadaranvsesudah">
                                                            </div>
                                                            <div class="col">
                                                                <label for="motoriksesudah">Motorik</label>
                                                                <input type="text" class="form-control"
                                                                    id="motoriksesudah" name="kesadaranmsesudah">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransesudah" value="Composmentis"
                                                            id="composmentissesudah">
                                                        <label class="form-check-label" for="composmentissesudah">Compos
                                                            Mentis</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransesudah" value="Apatis" id="apatissesudah">
                                                        <label class="form-check-label"
                                                            for="apatissesudah">Apatis</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransesudah" value="Somnolen"
                                                            id="somnolensesudah">
                                                        <label class="form-check-label"
                                                            for="somnolensesudah">Somnolen</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransesudah" value="Delerium"
                                                            id="deleriumsesudah">
                                                        <label class="form-check-label"
                                                            for="deleriumsesudah">Delerium</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransesudah" value="Soporoscoma"
                                                            id="soporoscomasesudah">
                                                        <label class="form-check-label" for="soporoscomasesudah">Soporos
                                                            Coma</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesadaransesudah" value="Coma" id="comasesudah">
                                                        <label class="form-check-label" for="comasesudah">Coma</label>
                                                    </div>
                                                </div>
                                                <strong><label for="vitalsignsesudah" style="font-size:16px">Vital
                                                        Sign</label></strong>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control" id="tdsesudah"
                                                            name="tdsesudah" placeholder="TD..../.....">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control" id="nsesudah"
                                                            name="nsesudah" placeholder="N....x/menit">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control" id="rsesudah"
                                                            name="rsesudah" placeholder="R....x/menit">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" class="form-control" id="sbsesudah"
                                                            name="sbsesudah" placeholder="Sb....">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        <strong><label for="skalanyerisesudah"
                                                                style="font-size:16px">Skala
                                                                Nyeri</label></strong>
                                                        <input type="text" class="form-control" id="skalanyerisesudah"
                                                            name="skalanyerisesudah">
                                                    </div>
                                                    <div class="col">
                                                        <strong><label for="lokasisesudah"
                                                                style="font-size:16px">Lokasi</label></strong>
                                                        <input type="text" class="form-control" id="lokasisesudah"
                                                            name="lokasisesudah">
                                                    </div>
                                                </div><br>
                                                <strong><label for="resikojatuhsesudah" style="font-size:16px">Resiko
                                                        Jatuh</label></strong>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="resikojatuhsesudah" value="Rendah" id="rendahsesudah">
                                                    <label class="form-check-label" for="rendahsesudah">Rendah</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="resikojatuhsesudah" value="Sedang" id="sedangsesudah">
                                                    <label class="form-check-label" for="sedangsesudah">Sedang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="resikojatuhsesudah" value="Tinggi" id="tinggisesudah">
                                                    <label class="form-check-label" for="tinggisesudah">Tinggi</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div><br>
                                            <h3><strong>II. Pemberian Terapi</strong></h3>
                                            <br>
                                            <div class="row">
                                                <div class="col-md">
                                                    <strong><label for="infussebelum"
                                                            style="font-size:16px">Infus</label></strong>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="infussebelum"
                                                                name="infussebelum">
                                                            <div class="input-group-append">
                                                                <label class="input-group-text"
                                                                    for="tanggalpemasangansebelum">Tanggal
                                                                    Pemasangan</label>
                                                            </div>
                                                            <input type="date" class="form-control"
                                                                id="tanggalpemasangansebelum"
                                                                name="tanggalpemasangansebelum">
                                                        </div>
                                                    </div>
                                                    <strong><label for="dcsebelum"
                                                            style="font-size:16px">Dc</label></strong>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="dcsebelum"
                                                                name="dcsebelum">
                                                            <div class="input-group-append">
                                                                <label class="input-group-text"
                                                                    for="tanggalpemasangandcsebelum">Tanggal
                                                                    Pemasangan</label>
                                                            </div>
                                                            <input type="date" class="form-control"
                                                                id="tanggalpemasangandcsebelum"
                                                                name="tanggalpemasangandcsebelum">
                                                        </div>
                                                    </div>
                                                </div>
                        
                                            </div>
                                            <div class="form-group">
                                                <strong><label for="injeksiyangdiberikan" style="font-size:16px">Obat
                                                        oral/
                                                        injeksi yang diberikan :</label></strong>
                                                <input type="text" class="form-control" id="injeksiyangdiberikan"
                                                    name="injeksiyangdiberikan">
                                            </div>
                                            <br>
                                            <h3><strong>III. Tindakan Medis Yang Telah Dilakukan
                                                </strong></h3>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="tindakanmedisyangdilakukan"
                                                    name="tindakanmedisyangdilakukan">
                                            </div><br>
                                            <h3><strong>IV. Informasi Khusus </strong></h3>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="informasikhusus"
                                                    name="informasikhusus">
                                            </div><br>

                                            <br>
                                                <h3><strong>V. Lain-Lain </strong></h3>
                                                <div class="form-group">
                                                <strong><label for="pemberianobat" style="font-size:16px">Catatan Pemberian
                                                        Obat</label></strong><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="pemberianobat" value="ya" id="yaobat">
                                                        <label class="form-check-label" for="yaobat">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="pemberianobat" value="tidak" id="tidakobat">
                                                        <label class="form-check-label" for="tidakobat">Tidak</label>
                                                    </div><br>

                                                    <strong><label for="hasillabo" style="font-size:16px">Hasil
                                                        Laboratorium</label></strong><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="hasillabo"
                                                            value="ya" id="yalabo">
                                                        <label class="form-check-label" for="yalabo">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="hasillabo"
                                                            value="tidak" id="tidaklabo">
                                                        <label class="form-check-label" for="tidaklabo">Tidak</label>
                                                    </div><br>

                                                    <strong><label for="hasilradio" style="font-size:16px">Hasil
                                                        Radiologi</label></strong><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="hasilradio"
                                                            value="ya" id="yaradio">
                                                        <label class="form-check-label" for="yaradio">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="hasilradio"
                                                            value="tidak" id="tidakradio">
                                                        <label class="form-check-label" for="tidakradio">Tidak</label>
                                                    </div><br>
                                                    <strong><label for="persetujuan" style="font-size:16px">Surat Persetujuan
                                                        Tindakan</label><br></strong>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="persetujuan"
                                                            value="ya" id="yasetuju">
                                                        <label class="form-check-label" for="yasetuju">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="persetujuan"
                                                            value="tidak" id="tidaksetuju">
                                                        <label class="form-check-label" for="tidaksetuju">Tidak</label>
                                                    </div><br>
                                                </div>

                                                <button type="submit" class="btn btn-success">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>



                    <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>

                    <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

                    <script src="{{asset('AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}">
                    </script>

                    <script src="{{asset('AdminLTE/dist/js/adminlte.min.js?v=3.2.0')}}"></script>

                    <script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>

                    <script>
                    $(function() {
                        bsCustomFileInput.init();
                    });
                    </script>
</body>

</html>