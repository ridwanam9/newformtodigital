<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ToFormDigital | Asesment Pasien Kondisi Terminal</title>

        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        ink rel="stylesheet" hr="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css?v=3.2.0')}}">
        <script nonce="f0d636cc-6902-47c0-85e3-1ca984c771a8">
        (function(w, d) {
            ! function(bv, bw, bx, by) {
                bv[bx] = bv[bx] || {};
                bv[bx]

                    .executed = [];
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
                                        <h1>Asesment Pasien Kondisi Terminal</h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a
                                                    href="{{ route('dashboard/page') }}">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Asesment Pasien Kondisi Terminal</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">



                                    <div class="card card-primary w-100">
                                        <div class="card-header">
                                            <h3 class="card-title">Data Diri</h3>
                                        </div>

                                        <div class="card-body">
                                            <form action="{{route('form/input2/save')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama"
                                                        placeholder="Enter Nama">
                                                </div>
                                                <div class="form-group">
                                                    <label for="norm">No Rekam Medis</label>
                                                    <input type="text" class="form-control" id="norm" name="norm"
                                                        placeholder="Enter No Rekam Medis">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggallahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="tanggallahir"
                                                        name="tanggallahir">
                                                </div>
                                                <div class="form-group">
                                                <h4><strong><label for="alamat">Alamat</label></strong></h4>
                                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                                        placeholder="Enter Alamat">
                                                </div>

                                                <div class="form-group">


                                                    <label for="exampleInputBorder"><strong>1. Gejala seperti mau muntah
                                                            dan kesulitan bernafas</strong> </label> <br>
                                                    <div class="row">


                                                        <div class="col-sm-6">

                                                            <label><strong>1.1. Kegawatan pernafasan</strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kegawatanpernafasan[]" id="dyspnoe"
                                                                    value="dyspnoe">
                                                                <label class="form-check-label"
                                                                    for="dyspnoe">Dyspnoe</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kegawatanpernafasan[]" id="nafastakteratur"
                                                                    value="nafastakteratur">
                                                                <label class="form-check-label"
                                                                    for="nafastakteratur">Nafas Tak Teratur</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kegawatanpernafasan[]" id="adasekret"
                                                                    value="adasekret">
                                                                <label class="form-check-label" for="ada-sekret">Ada
                                                                    sekret</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kegawatanpernafasan[]"
                                                                    id="nafas-cepat-dan-dangkal"
                                                                    value="nafascepatdandangkal">
                                                                <label class="form-check-label"
                                                                    for="nafas-cepat-dan-dangkal">Nafas cepat dan
                                                                    dangkal</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kegawatanpernafasan[]"
                                                                    id="nafas-melalui-mulut"
                                                                    value="nafasmelaluimulut">
                                                                <label class="form-check-label"
                                                                    for="nafas-melalui-mulut">Nafas melalui
                                                                    mulut</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kegawatanpernafasan[]" id="spo2-normal"
                                                                    value="spo2normal">
                                                                <label class="form-check-label"
                                                                    for="spo2-normal">SpO2normal</label>
                                                            </div>

                                                            <!-- BELUM DIKASIH ID VALUE -->
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kegawatanpernafasan[]" id="nafaslambat"
                                                                    value="nafaslambat">
                                                                <label class="form-check-label" for="nafaslambat">Nafas
                                                                    lambat</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kegawatanpernafasan[]" id="mukosaoralkering"
                                                                    value="mukosaoralkering">
                                                                <label class="form-check-label"
                                                                    for="mukosaoralkering">Mukosa oral kering</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kegawatanpernafasan[]" id="tak" value="tak">
                                                                <label class="form-check-label" for="tak">T.A.K</label>
                                                            </div><br>


                                                        </div>

                                                        <div class="col-sm-6">
                                                            <label><strong>1.2. Kehilangan Tinus otot</strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kehilangantinusotot[]" id="mual" value="mual">
                                                                <label class="form-check-label" for="mual">Mual</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kehilangantinusotot[]" id="sulitmenelan"
                                                                    value="sulitmenelan">
                                                                <label class="form-check-label" for="sulitmenelan">Sulit
                                                                    menelan</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kehilangantinusotot[]" id="inkontinesia"
                                                                    value="inkontinesia">
                                                                <label class="form-check-label"
                                                                    for="inkontinesia">Inkontinensia alvi</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kehilangantinusotot[]"
                                                                    id="penurunanpergerakan"
                                                                    value="penurunanpergerakan">
                                                                <label class="form-check-label"
                                                                    for="penurunanpergerakan">Penurunan Pergerakan
                                                                    tubuh</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kehilangantinusotot[]" id="distensiabdomen"
                                                                    value="distensiabdomen">
                                                                <label class="form-check-label"
                                                                    for="distensiabdomen">Distensi Abdomen</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kehilangantinusotot[]" id="tak" value="tak">
                                                                <label class="form-check-label" for="tak">T.A.K</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kehilangantinusotot[]" id="sulitberbicara"
                                                                    value="sulitberbicara">
                                                                <label class="form-check-label"
                                                                    for="sulitberbicara">Sulit Berbicara</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="kehilangantinusotot[]" id="inkontinensiaurine"
                                                                    value="inkontinensiaurine">
                                                                <label class="form-check-label"
                                                                    for="inkontinensiaurine">Inkontinensia Urine</label>
                                                            </div>


                                                        </div>

                                                        <div class="col-sm-6">

                                                            <label><strong>1.3. Nyeri </strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="nyeri" id="tidaknyeri" value="tidak"
                                                                    onclick="toggleInput(this)">
                                                                <label class="form-check-label"
                                                                    for="tidak">Tidak</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="nyeri" id="yanyeri" value="ya"
                                                                    onclick="toggleInput(this)">
                                                                <label class="form-check-label" for="ya">Ya</label>

                                                            </div>
                                                            <div class="form-group" id="input-container"
                                                                style="display: none;">
                                                                <h6>jika ya tuliskan bagian nyerinya</h6>
                                                                <input type="text" class="form-control" id="ya"
                                                                    name="bagiannyeri">
                                                            </div>

                                                            <script>

                                                            // const iyanyeri = document.getElementById('yanyeri');
                                                            // const input_container = document.getElementById('input-container');
                                                            // iyanyeri.addEventListener('change', function() {
                                                            // if (this.checked) {
                                                            //     input_container.disabled = false;
                                                            // } else {
                                                            //     input_container.disabled = true;
                                                            // }
                                                            // });
                                                            // </script>

                                                            <script>
                                                            function toggleInput(radio) {
                                                                var inputContainer = document.getElementById(
                                                                    "input-container");
                                                                if (radio.value === "ya") {
                                                                    inputContainer.style.display = "block";
                                                                } else {
                                                                    inputContainer.style.display = "none";
                                                                }
                                                            }
                                                            </script>
                                                        </div>




                                                        <!--
                                                        <label for="yes-radio">Yes</label>
                                                        <input type="radio" id="yes-radio" name="myRadio" value="yes" onclick="toggleInput(this)">

                                                        <label for="no-radio">No</label>
                                                        <input type="radio" id="no-radio" name="myRadio" value="no" onclick="toggleInput(this)">

                                                        <div id="input-container" style="display: none;">
                                                        <label for="other-text">Other:</label>
                                                        <input type="text" id="other-text" name="otherText">
                                                    </div>

                                                    <script>
                                                    function toggleInput(radio) {
                                                    var inputContainer = document.getElementById("input-container");
                                                    if (radio.value === "yes") {
                                                        inputContainer.style.display = "block";
                                                    } else {
                                                        inputContainer.style.display = "none";
                                                    }
                                                    }
                                                    </script>

                                                -->






                                                        <div class="col-sm-6">

                                                            <label><strong>1.4. Perlambatan sirkulasi</strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="perlambatansirkulasi[]" id="bercakdansianosis"
                                                                    value="bercakdansianosis">
                                                                <label class="form-check-label"
                                                                    for="bercakdansianosis">Bercak dan Sianosis pada
                                                                    ekstemitas</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="perlambatansirkulasi[]" id="gelisah"
                                                                    value="gelisah">
                                                                <label class="form-check-label"
                                                                    for="gelisah">Gelisah</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="perlambatansirkulasi[]" id="lemas"
                                                                    value="lemas">
                                                                <label class="form-check-label"
                                                                    for="lemas">Lemas</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="perlambatansirkulasi[]" id="kulitdingin"
                                                                    value="kulitdingin">
                                                                <label class="form-check-label" for="kulitdingin">kulit
                                                                    dingin dan berkeringat</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="perlambatansirkulasi[]" id="tekanandarah"
                                                                    value="tekanandarah">
                                                                <label class="form-check-label"
                                                                    for="tekanandarah">Tekanan darah menurun</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="perlambatansirkulasi[]" id="nadilambat"
                                                                    value="nadilambat">
                                                                <label class="form-check-label" for="nadilambat">Nadi
                                                                    lambat dan lemah</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="perlambatansirkulasi[]" id="tak" value="tak">
                                                                <label class="form-check-label" for="tak">T.A.K</label>
                                                            </div>

                                                        </div>
                                                    </div><br>


                                                    <label for="exampleInputBorder"><strong>2. Faktor-faktor yang
                                                            meningkatkan dan membangkitkan gejala fisik:</strong>
                                                    </label> <br>
                                                    <div class="row">
                                                        <div class="col-sm-6">

                                                        <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="aktivitasfisik" name="faktorgejalafisik[]" value="melakukan-aktifitas-fisik">
                                                        <label class="form-check-label" for="aktivitasfisik">Melakukan aktivitas
                                                                    fisik</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="pindahposisi" name="faktorgejalafisik[]" value="pindah-posisi">
                                                        <label class="form-check-label" for="pindahposisi">Pindah Posisi</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="lainnyacheckbox">
                                                        <label class="form-check-label" for="lainnyacheckbox">Lainnya:</label>
                                                        <input class="form-control" type="text" id="lainnyainput" name="faktorgejalafisiklainnya" disabled>
                                                    </div>

                                                        </div>
                                                    <script>

                                                       const inputCheckboxLainnya = document.getElementById('lainnyacheckbox');
                                                        const inputText = document.getElementById('lainnyainput');

                                                        inputCheckboxLainnya.addEventListener('change', function() {
                                                        if (this.checked) {
                                                            inputText.disabled = false;
                                                        } else {
                                                            inputText.disabled = true;
                                                        }
                                                        });

                                                        inputText.addEventListener('input', function() {
                                                        if (this.value !== '') {
                                                            inputCheckboxLainnya.disabled = true;
                                                        } else {
                                                            inputCheckboxLainnya.disabled = false;
                                                        }
                                                        });
                                                    </script>

                                                        </div>



                                                    </div> <br>

                                                    <label for="exampleInputBorder"><strong>3. Manajemen gejala saat ini
                                                            dan respon pasien</strong> </label> <br>
                                                    <div class="row">


                                                        <div class="col-sm-6">

                                                            <label><strong>Masalah keperawatan*</strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="manajemengejala[]" id="pindahposisi"
                                                                    value="mual">
                                                                <label class="form-check-label">Mual</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="manajemengejala[]" id="perubahanpersepsi"
                                                                    value="perubahanpersepsi">
                                                                <label class="form-check-label"
                                                                    for="perubahanpersepsi">Perubahan persepsi
                                                                    sensori</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="manajemengejala[]" id="nyeriakut"
                                                                    value="nyeriakut">
                                                                <label class="form-check-label" for="nyeriakut">Nyeri
                                                                    akut</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="manajemengejala[]" id="polanafas"
                                                                    value="polanafas">
                                                                <label class="form-check-label" for="polanafas">Pola
                                                                    nafas tidak efektif</label>
                                                            </div> <br>


                                                        </div>

                                                        <div class="col-sm-6">

                                                            <label><strong></strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="manajemengejala[]" id="konstipasi"
                                                                    value="konstipasi">
                                                                <label class="form-check-label"
                                                                    for="konstipasi">Konstipasi</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="manajemengejala[]" id="nyerikronis"
                                                                    value="nyerikronis">
                                                                <label class="form-check-label" for="nyerikronis">Nyeri
                                                                    kronis</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="manajemengejala[]" id="bersihanjalan"
                                                                    value="bersihanjalan">
                                                                <label class="form-check-label"
                                                                    for="bersihanjalan">Bersihan jalan nafas tidak
                                                                    efektif</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="manajemengejala[]" id="defisitperawatan"
                                                                    value="defisitperawatan">
                                                                <label class="form-check-label"
                                                                    for="defisitperawatan">Defisit perawatan
                                                                    diri</label>
                                                            </div>
                                                        </div><br>

                                                        <div class="col-sm-6">
                                                            <label for="exampleInputBorder"><strong>4. Orientasi
                                                                    spiritual pasien dan keluarga</strong> </label> <br>
                                                            <label><strong>Apakah perlu pelayanan
                                                                    spiritual?</strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="orientasispiritual" value="tidak" id="tidak61"
                                                                    onclick="spiritual(this)">
                                                                <label class="form-check-label"
                                                                    for="tidak">Tidak</label>
                                                            </div>


                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="orientasispiritual" value="ya" id="tidak61"
                                                                    onclick="spiritual(this)">
                                                                <label class="form-check-label" for="tidak">Ya</label>
                                                            </div>

                                                            <div class="form-group" id="layanan_spiritual"
                                                                style="display: none;">
                                                                <h6>jika Oleh siapa Layanannya</h6>
                                                                <input type="text" class="form-control" id="ya"
                                                                    name="oleh">
                                                            </div>

                                                            <script>
                                                            function spiritual(radio) {
                                                                var spirit = document.getElementById(
                                                                    "layanan_spiritual");
                                                                if (radio.value === "ya") {
                                                                    spirit.style.display = "block";
                                                                } else {
                                                                    spirit.style.display = "none";
                                                                }
                                                            }
                                                            </script>

                                                            <!-- <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="orientasispiritual" value="ya" id="ya61">
                                                                <label class="form-check-label">Ya </label>
                                                                <input type="text" class="form-control" id="ya">
                                                            </div> -->

                                                        </div>
                                                    </div> <br>

                                                    <label for="exampleInputBorder"><strong>5. Urusan dan kebutuhan
                                                            spiritual pasien dan keluarga seperti putus asa,
                                                            penderitaan,
                                                            rasa bersalah atau pengampunan:
                                                        </strong> </label> <br>
                                                    <div class="row">


                                                        <div class="col-sm-6">

                                                            <label><strong>Perlu didoakan:</strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="perludidoakan" value="tidak"
                                                                    id="tidakdidoakan">
                                                                <label class="form-check-label"
                                                                    for="tidak">Tidak</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="perludidoakan" value="ya" id="yadidoakan">
                                                                <label class="form-check-label" for="ya">Ya</label>
                                                            </div><br>

                                                            <label><strong>Perlu bimbingan rohani:</strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="perlubimbinganrohani" value="tidak"
                                                                    id="tidakbimbingan">
                                                                <label class="form-check-label"
                                                                    for="tidak">Tidak</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="perlubimbinganrohani" value="ya"
                                                                    id="yabimbingan">
                                                                <label class="form-check-label" for="ya">Ya</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">

                                                            <label><strong>Perlu pendampingan rohani</strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="perlupendampinganrohani" value="tidak"
                                                                    id="tidakpendampingan">
                                                                <label class="form-check-label"
                                                                    for="tidak">Tidak</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="perlupendampinganrohani" value="ya"
                                                                    id="yapendampingan">
                                                                <label class="form-check-label" for="ya">Ya</label>
                                                            </div>

                                                        </div>
                                                    </div><br>


                                                    <h3><strong>6. Status prikososial dan keluarga</strong> </h3>

                                                    <!-- <label for="exampleInputBorder"><strong>6. Status prikososial dan
                                                            keluarga</strong> </label> <br> -->
                                                    <div class="row">
                                                        <div class="col-sm-6">

                                                            <label><strong>6.1. Apakah ada orang yang ingin dihubungi
                                                                    saat ini?</strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="orangyangdihubungi" value="tidak" id="tidak61"
                                                                    onclick="orangdihubungi(this)">
                                                                <label class="form-check-label"
                                                                    for="tidak">Tidak</label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="orangyangdihubungi" value="ya" id="tidak61"
                                                                    onclick="orangdihubungi(this)">
                                                                <label class="form-check-label" for="tidak">Ya</label>
                                                            </div>

                                                            <div id="input-container2" style="display: none;">
                                                                <label class="form-check-label">siapa: </label>
                                                                <input type="text" class="form-control" name="siapa"
                                                                    id="siapa">
                                                                <label class="form-check-label">Hubungan dengan
                                                                    pasien sebagai: </label>
                                                                <input type="text" class="form-control"
                                                                    id="hubungansebagai" name="hubungansebagai">
                                                                <label class="form-check-label">Dimana:</label>
                                                                <input type="text" class="form-control" id="dimana"
                                                                    name="dimana">
                                                                <label class="form-check-label">No. Telpon/HP:
                                                                </label>
                                                                <input type="text" class="form-control" id="telp"
                                                                    name="telp">

                                                            </div>


                                                            <script>
                                                            function orangdihubungi(radio) {
                                                                var inputContainer2 = document.getElementById(
                                                                    "input-container2");
                                                                if (radio.value === "ya") {
                                                                    inputContainer2.style.display = "block";
                                                                } else {
                                                                    inputContainer2.style.display = "none";
                                                                }
                                                            }
                                                            </script>


                                                            <label><strong>6.2. Bagaimana rencana perawatan
                                                                    selanjutnya?</strong></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="rencanaperawatan" value="rawatdirs"
                                                                    id="tetapdirawatdirs" onclick="toggleinput5(this)">
                                                                <label class="form-check-label" for="tetapdirawat">Tetap
                                                                    dirawat di RS</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="rencanaperawatan" value="rawatdirumah"
                                                                    id="dirawatdirumah" onclick="toggleinput5(this)">
                                                                <label class="form-check-label"
                                                                    for="dirawatdirumah">Dirawat di rumah</label>
                                                            </div>



                                                            <div class="form-check" id="dirumah" style="display: none;">

                                                                <label class="form-check-label">Apakah Lingkungan
                                                                    rumah
                                                                    sudah disiapkan</label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="lingkunganrumah" value="tidak62a"
                                                                        id="tidak62a" onclick="toggleinput6(this)">
                                                                    <label class="form-check-label"
                                                                        for="tidak">Tidak</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="lingkunganrumah" value="ya62a" id="ya"
                                                                        onclick="toggleinput6(this)">
                                                                    <label class="form-check-label" for="ya">Ya</label>
                                                                </div>
                                                            </div>

                                                            <script>
                                                            function toggleinput5(radio) {
                                                                var inputContainer3 = document.getElementById(
                                                                    "dirumah");
                                                                if (radio.value === "rawatdirumah") {
                                                                    inputContainer3.style.display = "block";
                                                                } else {
                                                                    inputContainer3.style.display = "none";
                                                                }
                                                            }
                                                            </script>

                                                            <div class="form-check" id="lingkunganrumahsiap"
                                                                style="display: none;">

                                                                <label class="form-check-label">Jika Ya, Apakah ada
                                                                    yang
                                                                    mampu ,merawat pasien di rumah?</label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="mampumerawat" value="tidak62b"
                                                                        id="tidak62b" onclick="toggleinput7(this)">
                                                                    <label class="form-check-label"
                                                                        for="tidak">Tidak</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="mampumerawat" value="ya62b" id="ya62b"
                                                                        onclick="toggleinput7(this)">
                                                                    <label class="form-check-label" for="ya">Ya</label>
                                                                </div>

                                                                <div class="form-group" id="input-container7"
                                                                    style="display: none;">
                                                                    <h6>Oleh</h6>
                                                                    <input type="text" class="form-control" id="olehsiapa"
                                                                        name="siapaygmerawat">
                                                                </div>


                                                            </div>

                                                            <script>
                                                            function toggleinput6(radio) {
                                                                var inputContainer4 = document.getElementById(
                                                                    "lingkunganrumahsiap");
                                                                    var inputContainer6 = document.getElementById(
                                                                    "input-container8");
                                                                if (radio.value === "ya62a") {
                                                                    inputContainer4.style.display = "block";
                                                                    inputContainer6.style.display = "none";
                                                                } else {
                                                                    inputContainer4.style.display = "none";
                                                                    inputContainer6.style.display = "block";
                                                                }
                                                            }
                                                            </script>

                                                            <script>
                                                            function toggleinput7(radio) {
                                                                var inputContainer5 = document.getElementById(
                                                                    "input-container7");
                                                               if (radio.value === "ya62b") {
                                                                    inputContainer5.style.display = "block";
                                                                    } else {
                                                                    inputContainer5.style.display = "none";
                                                                    }
                                                            }
                                                            </script>

                                                            <!-- <script>
                                                            function toggleinput8(radio) {
                                                                var inputContainer6 = document.getElementById(
                                                                    "input-container8");
                                                               if (radio.value === "tidak62a") {
                                                                    inputContainer6.style.display = "block";
                                                                    } else {
                                                                    inputContainer6.style.display = "none";
                                                                    }
                                                            }
                                                            </script> -->


                                                            <div class="form-check" id="input-container8"
                                                                style="display: none;">
                                                                <label class="form-check-label">Jika tidak, apakah
                                                                    perlu
                                                                    difasilitasi RS (Home Care)?</label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="perlufasilitas" value="ya" id="ya62c">
                                                                    <label class="form-check-label" for="ya">Ya</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="perlufasilitas" value="tidak" id="ya62c">
                                                                    <label class="form-check-label"
                                                                        for="tidak">Tidak</label>

                                                                </div>

                                                            </div>

                                                        </div>
                                                        <br>

                                                        <div class="col-sm-6">

                                                            <label><strong>6.3. Reaksi pasien atas penyakitnya?</strong></label>

                                                            <div class="col-sm-6">

                                                                <label><strong> Asesmen
                                                                        Informasi</strong></label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksipasien[]" id="menyangkal"
                                                                        value="menyangkal">
                                                                    <label class="form-check-label"
                                                                        for="menyangkal">Menyangkal</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksipasien[]" id="marah"
                                                                        value="marah">
                                                                    <label class="form-check-label"
                                                                        for="marah">Marah</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksipasien[]" id="sedih"
                                                                        value="sedih">
                                                                    <label class="form-check-label"
                                                                        for="sedih">Sedih/menangis</label>
                                                                </div>

                                                            </div>

                                                            <div class="col-sm-6">

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksipasien[]" id="rasabersalah"
                                                                        value="rasabersalah">
                                                                    <label class="form-check-label"
                                                                        for="rasabersalah">Rasa bersalah</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksipasien[]"
                                                                        id="ketidakberdayaan" value="ketidakberdayaan">
                                                                    <label class="form-check-label"
                                                                        for="ketidakberdayaan">Ketidak
                                                                        Berdayaan</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksipasien[]" id="takut"
                                                                        value="takut">
                                                                    <label class="form-check-label"
                                                                        for="takut">Takut</label>
                                                                </div>
                                                            </div><br>

                                                            <div class="col-sm-6">

                                                                <label><strong> Masalah
                                                                        Keperawatan</strong></label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="masalahreaksipasien[]" id="anxietas"
                                                                        value="anxietas">
                                                                    <label class="form-check-label"
                                                                        for="anxietas">Anxietas</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="masalahreaksipasien[]" id="distress"
                                                                        value="distress">
                                                                    <label class="form-check-label"
                                                                        for="distress">Distress
                                                                        Spiritual</label>
                                                                </div>
                                                            </div><br>

                                                        </div>

                                                        <div class="col-sm-6">
                                                            <label><strong>6.4. Reaksi keluarga atas penyakit
                                                                    pasien</strong></label>

                                                            <!-- <div class="col-sm-10"> -->

                                                                <label><strong> Asesmen
                                                                        Informasi</strong></label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksikeluarga[]" id="marah"
                                                                        value="marah">
                                                                    <label class="form-check-label"
                                                                        for="marah">Marah</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksikeluarga[]"
                                                                        id="gangguantidur" value="gangguantidur">
                                                                    <label class="form-check-label"
                                                                        for="gangguantidur">Gangguan
                                                                        Tidur</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksikeluarga[]"
                                                                        id="penurunankonsentrasi"
                                                                        value="penurunankonsentrasi">
                                                                    <label class="form-check-label"
                                                                        for="penurunankonsentrasi">Penurunan
                                                                        Konsentrasi</label>
                                                                </div>


                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksikeluarga[]"
                                                                        id="ketidakmampuan" value="ketidakmampuan">
                                                                    <label class="form-check-label"
                                                                        for="ketidakmampuan">Ketidakmampuan
                                                                        memnuhi
                                                                        peran yang diharapkan</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksikeluarga[]"
                                                                        id="keluargakurangberkomunikasi"
                                                                        value="keluargakurangberkomunikasi">
                                                                    <label class="form-check-label"
                                                                        for="keluargakurangberkomunikasi">Keluarga
                                                                        kurang berkomunikasi dengan
                                                                        pasien</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksikeluarga[]"
                                                                        id="keluargakurangberpartisipasi"
                                                                        value="keluargakurangberpartisipasi">
                                                                    <label class="form-check-label"
                                                                        for="keluargakurangberpartisipasi">Keluarga
                                                                        kurang berpartisipasi membuat keputusan
                                                                        dalam
                                                                        perawatan pasien</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksikeluarga[]" id="letih"
                                                                        value="letih">
                                                                    <label class="form-check-label"
                                                                        for="letih">Letih/lelah</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksikeluarga[]" id="rasabersalah"
                                                                        value="rasabersalah">
                                                                    <label class="form-check-label"
                                                                        for="rasabersalah">Rasa Bersalah</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="asesmenreaksikeluarga[]"
                                                                        id="perubahankebiasaan"
                                                                        value="perubahankebiasaan">
                                                                    <label class="form-check-label"
                                                                        for="perubahankebiasaan">Perubahan
                                                                        kebiasaan
                                                                        pola komunikasi</label>
                                                                </div>
                                                            <!-- </div> -->

                                                            <br>

                                                            <div class="col-sm-6">

                                                                <label><strong> Masalah
                                                                        Keperawatan</strong></label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="masalahreaksikeluarga[]"
                                                                        id="kopingindividu" value="kopingindividu">
                                                                    <label class="form-check-label"
                                                                        for="kopingindividu">Koping individu
                                                                        tidak
                                                                        efektif</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="masalahreaksikeluarga[]"
                                                                        id="distressspiritual"
                                                                        value="distressspiritual">
                                                                    <label class="form-check-label"
                                                                        for="distressspiritual">Distress
                                                                        Spiritual</label>
                                                                </div>

                                                            </div>


                                                        </div>
































                                                        <!-- </div> -->
                                                        <!-- </div> -->

                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>

                                                        <div class="col-sm-12">

                                                        <h4><strong>7. Kebutuhan dukungan atau kelonggaran pelayanan
                                                                    bagi
                                                                    pasien, keluarga dan pemberi pelayanan lain :
                                                                </strong>
                                                            </h4>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="pasienperlu" name="kebutuhandukungan[]" value="Pasien perlu didampingi keluarga">
                                                                <label class="form-check-label" for="pasienperlu">Pasien perlu didampingi keluarga</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="keluargadapatmengunjungi" name="kebutuhandukungan[]" value="Keluarga dapat mengunjungi pasien di luar waktu">
                                                                <label class="form-check-label" for="keluargadapatmengunjungi">Keluarga dapat mengunjungi pasien di luar waktu</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="sahabatdapatmengunjungi" name="kebutuhandukungan[]" value="Sahabat dapat mengunjungi pasien">
                                                                <label class="form-check-label" for="sahabatdapatmengunjungi">Sahabat dapat mengunjungi pasien di luar waktu</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="input-checkbox-lainnya" >
                                                                <label class="form-check-label" for="input-checkbox-lainnya">Lainnya:</label>
                                                                <input class="form-control" type="text" id="input-text" name="kebutuhandukunganlainnya" disabled>
                                                            </div>

                                                            <script>
                                                                const inputCheckboxLainnya1 = document.getElementById('input-checkbox-lainnya');
                                                            const inputText1 = document.getElementById('input-text');

                                                            inputCheckboxLainnya1.addEventListener('change', function() {
                                                            if (this.checked) {
                                                                inputText1.disabled = false;
                                                            } else {
                                                                inputText1.disabled = true;
                                                            }
                                                            });

                                                            inputText1.addEventListener('input', function() {
                                                            if (this.value !== '') {
                                                                inputCheckboxLainnya1.disabled = true;
                                                            } else {
                                                                inputCheckboxLainnya1.disabled = false;
                                                            }
                                                            });
                                                            </script>

<h4><strong>8. Apakah ada kebutuhan akan alternatif atau
                                                                    timgkat
                                                                    pelayanan lain : </strong> </h4>
                                                            <div class="row">
                                                                <div class="col-sm-6">

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="tidak" name="kebutuhanalternatif[]" value="Tidak">
                                                                    <label class="form-check-label" for="tidak">Tidak</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="donasiorgan">
                                                                    <label class="form-check-label" for="donasiorgan">Donasi Organ :</label>
                                                                    <input type="text" class="form-control" id="inputdonasiorgan" name="donasiorgan">
                                                                </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="kebutuhanalternatif[]" id="autopsi" value="autopsi">
                                                                        <label class="form-check-label" for="autopsi">Autopsi</label>
                                                                    </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="input-checkbox-lainnya1" name="kebutuhanalternatif[]">
                                                                    <label class="form-check-label" for="input-checkbox-lainnya1">Lainnya:</label>
                                                                    <input class="form-control" type="text" id="input-text1" name="kebutuhanalternatiflainnya" disabled>
                                                                </div>
                                                                </div>



                                                                <script>
                                                                const inputCheckboxLainnya3 = document.getElementById('input-checkbox-lainnya1');
                                                                const inputText3 = document.getElementById('input-text1');

                                                                inputCheckboxLainnya3.addEventListener('change', function() {
                                                                if (this.checked) {
                                                                    inputText3.disabled = false;
                                                                } else {
                                                                    inputText3.disabled = true;
                                                                }
                                                                });

                                                                inputText3.addEventListener('input', function() {
                                                                if (this.value !== '') {
                                                                    inputCheckboxLainnya3.disabled = true;
                                                                } else {
                                                                    inputCheckboxLainnya3.disabled = false;
                                                                }
                                                                });
                                                                </script>

<script>
                                                                const inputCheckboxDonasi = document.getElementById('donasiorgan');
                                                                const inputTextDonasi = document.getElementById('inputdonasiorgan');

                                                                inputCheckboxDonasi.addEventListener('change', function() {
                                                                if (this.checked) {
                                                                    inputTextDonasi.disabled = false;
                                                                } else {

                                                                    inputTextDonasi.disabled = true;
                                                                }
                                                                });

                                                                inputTextDonasi.addEventListener('input', function() {
                                                                if (this.value !== '') {
                                                                    inputCheckboxDonasi.disabled = true;
                                                                } else {
                                                                   inputCheckboxDonasi.disabled = false;
                                                                }
                                                                });
                                                                </script>

                                                                </script>

                                                                </div>

                                                            <h4><strong>Faktor resiko bagi keluarga yang ditinggalkan :
                                                                </strong> </h4>
                                                            <h5><strong>Asesmen informasi </strong> </h5>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="asesmenfaktorresiko[]" id="marah"
                                                                            value="marah">
                                                                        <label class="form-check-label"
                                                                            for="marah">Marah</label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="asesmenfaktorresiko[]" id="depresi"
                                                                            value="depresi">
                                                                        <label class="form-check-label"
                                                                            for="depresi">Depresi</label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="asesmenfaktorresiko[]"
                                                                            id="rasabersalah" value="rasabersalah">
                                                                        <label class="form-check-label"
                                                                            for="rasabersalah">Rasa
                                                                            bersalah</label>
                                                                    </div><br>
                                                                </div>

                                                                <div class="col-sm-3">

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="asesmenfaktorresiko[]" id="sedih"
                                                                            value="sedih">
                                                                        <label class="form-check-label"
                                                                            for="sedih">Sedih/menangis</label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="asesmenfaktorresiko[]" id="letih"
                                                                            value="letih">
                                                                        <label class="form-check-label"
                                                                            for="letih">Letih/lelah</label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="asesmenfaktorresiko[]"
                                                                            id="gangguantidur" value="gangguantidur">
                                                                        <label class="form-check-label"
                                                                            for="gangguantidur">Gangguan Tidur</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="asesmenfaktorresiko[]"
                                                                            id="penurunankonsentrasi"
                                                                            value="penurunankonsentrasi">
                                                                        <label class="form-check-label"
                                                                            for="penurunankonsentrasi">Penurunan
                                                                            Konsentrasi</label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="asesmenfaktorresiko[]"
                                                                            id="perubahankebiasaan"
                                                                            value="perubahankebiasaan">
                                                                        <label class="form-check-label"
                                                                            for="perubahankebiasaan">Perubahan kebiasaan
                                                                            pola
                                                                            komunikasi</label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="asesmenfaktorresiko[]"
                                                                            id="ketidakmampuanmemenuhi"
                                                                            value="ketidakmampuanmemenuhi">
                                                                        <label class="form-check-label"
                                                                            for="ketidakmampuanmemenuhi">Ketidakmampuan
                                                                            memenuhi
                                                                            peran yang diharapkan</label>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                            <h5><strong>Masalah Keperawatan </strong> </h5>

                                                            <div class="row">

                                                                <div class="col-sm-6">

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="masalahfaktorresiko[]"
                                                                            id="koplingindividu"
                                                                            value="koplingindividu">
                                                                        <label class="form-check-label"
                                                                            for="koplingindividu">Koping individu tidak
                                                                            efektif</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="masalahfaktorresiko[]"
                                                                            id="distressspiritual"
                                                                            value="distressspiritual">
                                                                        <label class="form-check-label"
                                                                            for="distressspiritual">Distress
                                                                            Spiritual</label>
                                                                    </div>
                                                                </div>


                                                            </div> <br>



                                                            <button type="submit"
                                                                class="btn btn-success">Submit</button>

                                                        </div>

                                                    </div><!-- div row -->
                                                </div>



                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
    </body>




</html>
