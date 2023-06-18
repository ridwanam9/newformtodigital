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
                            <h3 class="page-title">Transfer Intra Rumah Sakit</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard/page') }}">Dashboard</a></li>
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
                                <div class="card-header">
                                    <h3 class="card-title">Data Diri</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('form/input/update') }}" method="POST">
                                        @csrf
                                        <br>
                                        <input type="hidden" name="id" value="{{ $formInputView->id }}">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="nama"
                                                            style="font-size:16px">Nama</label></strong>
                                                    <input type="text"
                                                        class="form-control @error('nama') is-invalid @enderror"
                                                        name="nama" value="{{ $formInputView->nama }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="norm" style="font-size:16px">No
                                                            Rekam Medis</label></strong>
                                                    <input type="text"
                                                        class="form-control @error('norm') is-invalid @enderror"
                                                        name="norm" value="{{ $formInputView->norm }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="tanggallahir" style="font-size:16px">Tanggal
                                                            Lahir</label></strong>
                                                    <input type="date"
                                                        class="form-control @error('tanggallahir') is-invalid @enderror"
                                                        name="tanggallahir" value="{{ $formInputView->tanggallahir }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="alamat" style="font-size:16px">Alamat</label></strong>
                                                    <input type="text"
                                                        class="form-control @error('tanggallahir') is-invalid @enderror"
                                                        name="alamat" value="{{ $formInputView->alamat }}">
                                                </div>
                                            </div>
                                        </div><br>
                                        <h3><strong>Data Transfer</strong></h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="dpjp"
                                                            style="font-size:16px">DPJP</label></strong>
                                                    <input type="text"
                                                        class="form-control @error('dpjp') is-invalid @enderror"
                                                        name="dpjp" value="{{ $formInputView->dpjp }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="dokterkonsulan" style="font-size:16px">Dokter
                                                            Konsultan</label></strong>
                                                    <input type="text"
                                                        class="form-control @error('dokterkonsulan') is-invalid @enderror"
                                                        name="dokterkonsulan"
                                                        value="{{ $formInputView->dokterkonsulan }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="diagnosa"
                                                            style="font-size:16px">Diagnosa</label></strong>
                                                    <input type="text"
                                                        class="form-control @error('diagnosa') is-invalid @enderror"
                                                        name="diagnosa" value="{{ $formInputView->diagnosa }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="riwayatalergi" style="font-size:16px">Riwayat
                                                            Alergi</label></strong>
                                                    <input type="text"
                                                        class="form-control @error('riwayatalergi') is-invalid @enderror"
                                                        name="riwayatalergi"
                                                        value="{{ $formInputView->riwayatalergi }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="alasanpindahruangan"
                                                            style="font-size:16px">Alasan Pindah
                                                            Ruangan</label></strong>
                                                    <input type="text"
                                                        class="form-control @error('alasanpindahruangan') is-invalid @enderror"
                                                        name="alasanpindahruangan"
                                                        value="{{ $formInputView->alasanpindahruangan }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="tanggalmasuk" style="font-size:16px">Tanggal
                                                            Masuk</label></strong>
                                                    <input type="date"
                                                        class="form-control @error('tanggalmasuk') is-invalid @enderror"
                                                        name="tanggalmasuk" value="{{ $formInputView->tanggalmasuk }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="pindahkeruang"
                                                            style="font-size:16px">Ruang</label></strong>
                                                    <input type="text"
                                                        class="form-control @error('ruang') is-invalid @enderror"
                                                        name="ruang" value="{{ $formInputView->ruang }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="tanggalpindah" style="font-size:16px">Tanggal
                                                            Pindah</label></strong>
                                                    <input type="date"
                                                        class="form-control @error('tanggalpindah') is-invalid @enderror"
                                                        name="tanggalpindah"
                                                        value="{{ $formInputView->tanggalpindah }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="jampindah" style="font-size:16px">Jam
                                                            Pindah</label></strong>
                                                    <input type="time"
                                                        class="form-control @error('jampindah') is-invalid @enderror"
                                                        name="jampindah" value="{{ $formInputView->jampindah }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <strong><label for="pindahkeruang" style="font-size:16px">Pindah Ke
                                                            Ruang</label></strong>
                                                    <input type="text"
                                                        class="form-control @error('pindahkeruang') is-invalid @enderror"
                                                        name="pindahkeruang"
                                                        value="{{ $formInputView->pindahkeruang }}">
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
                                                <input type="text"
                                                    class="form-control @error('keluhansebelum') is-invalid @enderror"
                                                    name="keluhansebelum" value="{{ $formInputView->keluhansebelum }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="keadaanumum">Keadaan Umum</label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input " type="radio" name="keadaanumum"
                                                        id="baiksebelum" value="Baik"
                                                        {{ $formInputView->keadaanumum == 'Baik' ? "checked" :"" }}>
                                                    <label class="form-check-label" for="baiksebelum">Baik</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="keadaanumum"
                                                        id="tampaksakitsebelum" value="Tampak Sakit"
                                                        {{ $formInputView->keadaanumum == 'Tampak Sakit' ? "checked" :"" }}>
                                                    <label class="form-check-label" for="tampaksakitsebelum">Tampak
                                                        Sakit</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input " type="radio" name="keadaanumum"
                                                        id="sesaknafassebelum" value="Sesak Nafas"
                                                        {{ $formInputView->keadaanumum == 'Sesak Nafas' ? "checked" :"" }}>
                                                    <label class="form-check-label" for="sesaknafassebelum">Sesak
                                                        Nafas</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="keadaanumum"
                                                        id="pucatsebelum" value="Pucat"
                                                        {{ $formInputView->keadaanumum == 'Pucat' ? "checked" :"" }}>
                                                    <label class="form-check-label" for="pucatsebelum">Pucat</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="keadaanumum"
                                                        id="lemahsebelum" value="Lemah"
                                                        {{ $formInputView->keadaanumum == 'Lemah' ? "checked" :"" }}>
                                                    <label class="form-check-label" for="lemahsebelum">Lemah</label>
                                                </div>
                                                <div class="form-group">
                                                    <strong><label for="kesadaransebelum"
                                                            style="font-size:16px">Kesadaran</label>
                                                        <div class="form-row">
                                                    </strong>
                                                    <div class="col">
                                                        <label for="eyesebelum">Eye</label>
                                                        <input type="text"
                                                            class="form-control @error('kesadaranesebelum') is-invalid @enderror"
                                                            name="kesadaranesebelum"
                                                            value="{{ $formInputView->kesadaranesebelum }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="verbalsebelum">Verbal</label>
                                                        <input type="text"
                                                            class="form-control @error('kesadaranvsebelum') is-invalid @enderror"
                                                            name="kesadaranvsebelum"
                                                            value="{{ $formInputView->kesadaranvsebelum }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="motoriksebelum">Motorik</label>
                                                        <input type="text"
                                                            class="form-control @error('kesadaranmsebelum') is-invalid @enderror"
                                                            value="{{ $formInputView->kesadaranmsebelum }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="kesadaransebelum"
                                                    id="composmentissebelum" value="Composmentis"
                                                    {{ $formInputView->kesadaransebelum == 'Composmentis' ? "checked" :"" }}>
                                                <label class="form-check-label" for="composmentissebelum">Compos
                                                    Mentis</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="radio" name="kesadaransebelum"
                                                    id="apatissebelum" value="Apatis"
                                                    {{ $formInputView->kesadaransebelum == 'Apatis' ? "checked" :"" }}>
                                                <label class="form-check-label" for="apatissebelum">Apatis</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="radio" name="kesadaransebelum"
                                                    id="somnolensebelum" value="Somnolen"
                                                    {{ $formInputView->kesadaransebelum == 'Somnolen' ? "checked" :"" }}>
                                                <label class="form-check-label" for="somnolensebelum">Somnolen</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="radio" name="kesadaransebelum"
                                                    id="deleriumsebelum" value="Delerium"
                                                    {{ $formInputView->kesadaransebelum == 'Delerium' ? "checked" :"" }}>
                                                <label class="form-check-label" for="deleriumsebelum">Delerium</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="radio" name="kesadaransebelum"
                                                    id="soporoscomasebelum" value="Soporoscoma"
                                                    {{ $formInputView->kesadaransebelum == 'Soporoscoma' ? "checked" :"" }}>
                                                <label class="form-check-label" for="soporoscomasebelum">Soporos
                                                    Coma</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="radio" name="kesadaransebelum"
                                                    id="comasebelum" value="Coma"
                                                    {{ $formInputView->kesadaransebelum == 'Coma' ? "checked" :"" }}>
                                                <label class="form-check-label" for="comasebelum">Coma</label>
                                            </div>

                                        </div>
                                        <strong><label for="vitalsignsebelum" style="font-size:16px">Vital
                                                Sign</label></strong>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <input type="text"
                                                    class="form-control @error('vitalsignsebelum') is-invalid @enderror"
                                                    name="tdsebelum" placeholder="TD.../..."value="{{ $formInputView->tdsebelum }}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="text"
                                                    class="form-control @error('vitalsignsebelum') is-invalid @enderror"
                                                    name="nsebelum" placeholder="N...x/menit" value="{{ $formInputView->nsebelum }}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="text"
                                                    class="form-control @error('vitalsignsebelum') is-invalid @enderror"
                                                    name="rsebelum" placeholder="R...x/menit" value="{{ $formInputView->rsebelum }}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="text"
                                                    class="form-control @error('vitalsignsebelum') is-invalid @enderror"
                                                    name="sbsebelum" placeholder="Sb..." value="{{ $formInputView->sbsebelum }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <strong><label for="skalanyerisebelum" style="font-size:16px">Skala
                                                        Nyeri</label></strong>
                                                <input type="text"
                                                    class="form-control @error('skalanyerisebelum') is-invalid @enderror"
                                                    name="skalanyerisebelum"
                                                    value="{{ $formInputView->skalanyerisebelum }}">
                                            </div>
                                            <div class="col">
                                                <strong><label for="lokasisebelum"
                                                        style="font-size:16px">Lokasi</label></strong>
                                                <input type="text"
                                                    class="form-control @error('skalanyerisebelum') is-invalid @enderror"
                                                    name="lokasisebelum" value="{{ $formInputView->lokasisebelum }}">
                                            </div>
                                        </div><br>
                                        <strong><label for="resikojatuhsebelum" style="font-size:16px">Resiko
                                                Jatuh</label></strong>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input " type="radio" name="resikojatuhsebelum"
                                                id="rendahsebelum" value="Rendah"
                                                {{ $formInputView->resikojatuhsebelum == 'Rendah' ? "checked" :"" }}>
                                            <label class="form-check-label" for="rendahsebelum">Rendah</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input " type="radio" name="resikojatuhsebelum"
                                                id="sedangsebelum" value="Sedang"
                                                {{ $formInputView->resikojatuhsebelum == 'Sedang' ? "checked" :"" }}>
                                            <label class="form-check-label" for="sedangsebelum">Sedang</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input " type="radio" name="resikojatuhsebelum"
                                                id="tinggisebelum" value="Tinggi"
                                                {{ $formInputView->resikojatuhsebelum == 'Tinggi' ? "checked" :"" }}>
                                            <label class="form-check-label" for="tinggisebelum">Tinggi</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h4>Sesudah Transfer</h4>
                                        <div class="form-group">
                                            <label for="keluhansesudah">Keluhan</label>
                                            <input type="text"
                                                class="form-control @error('keluhansesudah') is-invalid @enderror"
                                                name="keluhansesudah" value="{{ $formInputView->keluhansesudah }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="keadaanumum1">Keadaan Umum</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="radio" name="keadaanumum1"
                                                    id="baiksesudah" value="Baik"
                                                    {{ $formInputView->keadaanumum1 == 'Baik' ? "checked" :"" }}>
                                                <label class="form-check-label" for="baiksesudah">Baik</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="keadaanumum1"
                                                    id="tampaksakitsesudah" value="Tampak Sakit"
                                                    {{ $formInputView->keadaanumum1 == 'Tampak Sakit' ? "checked" :"" }}>
                                                <label class="form-check-label" for="tampaksakitsesudah">Tampak
                                                    Sakit</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="radio" name="keadaanumum1"
                                                    id="sesaknafassesudah" value="Sesak Nafas"
                                                    {{ $formInputView->keadaanumum1 == 'Sesak Nafas' ? "checked" :"" }}>
                                                <label class="form-check-label" for="sesaknafassesudah">Sesak
                                                    Nafas</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="keadaanumum1"
                                                    id="pucatsesudah" value="Pucat"
                                                    {{ $formInputView->keadaanumum1 == 'Pucat' ? "checked" :"" }}>
                                                <label class="form-check-label" for="pucatsesudah">Pucat</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="keadaanumum1"
                                                    id="lemahsesudah" value="Lemah"
                                                    {{ $formInputView->keadaanumum1 == 'Lemah' ? "checked" :"" }}>
                                                <label class="form-check-label" for="lemahsesudah">Lemah</label>
                                            </div>
                                            <div class="form-group">
                                                <strong><label for="kesadaransesudah"
                                                        style="font-size:16px">Kesadaran</label>
                                                    <div class="form-row">
                                                </strong>
                                                <div class="col">
                                                    <label for="eyesesudah">Eye</label>
                                                    <input type="text"
                                                        class="form-control @error('kesadaranesesudah') is-invalid @enderror"
                                                        name="kesadaranesesudah"
                                                        value="{{ $formInputView->kesadaranesesudah }}">
                                                </div>
                                                <div class="col">
                                                    <label for="verbalsesudah">Verbal</label>
                                                    <input type="text"
                                                        class="form-control @error('kesadaranvsesudah') is-invalid @enderror"
                                                        name="kesadaranvsesudah"
                                                        value="{{ $formInputView->kesadaranvsesudah }}">
                                                </div>
                                                <div class="col">
                                                    <label for="motoriksesudah">Motorik</label>
                                                    <input type="text"
                                                        class="form-control @error('kesadaranmsesudah') is-invalid @enderror"
                                                        name="kesadaranmsesudah"
                                                        value="{{ $formInputView->kesadaranmsesudah }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kesadaransesudah"
                                                id="composmentissesudah" value="Composmentis"
                                                {{ $formInputView->kesadaransesudah == 'Composmentis' ? "checked" :"" }}>
                                            <label class="form-check-label" for="composmentissesudah">Compos
                                                Mentis</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input " type="radio" name="kesadaransesudah"
                                                id="apatissesudah" value="Apatis"
                                                {{ $formInputView->kesadaransesudah == 'Apatis' ? "checked" :"" }}>
                                            <label class="form-check-label" for="apatissesudah">Apatis</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input " type="radio" name="kesadaransesudah"
                                                id="somnolensesudah" value="Somnolen"
                                                {{ $formInputView->kesadaransesudah == 'Somnolen' ? "checked" :"" }}>
                                            <label class="form-check-label" for="somnolensesudah">Somnolen</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input " type="radio" name="kesadaransesudah"
                                                id="deleriumsesudah" value="Delerium"
                                                {{ $formInputView->kesadaransesudah == 'Delerium' ? "checked" :"" }}>
                                            <label class="form-check-label" for="deleriumsesudah">Delerium</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input " type="radio" name="kesadaransesudah"
                                                id="soporoscomasesudah" value="Soporoscoma"
                                                {{ $formInputView->kesadaransesudah == 'Soporoscoma' ? "checked" :"" }}>
                                            <label class="form-check-label" for="soporoscomasesudah">Soporos
                                                Coma</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input " type="radio" name="kesadaransesudah"
                                                id="comasesudah" value="Coma"
                                                {{ $formInputView->kesadaransesudah == 'Coma' ? "checked" :"" }}>
                                            <label class="form-check-label" for="comasesudah">Coma</label>
                                        </div>
                                    </div>
                                    <strong><label for="vitalsignsesudah" style="font-size:16px">Vital
                                            Sign</label></strong>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <input type="text"
                                                class="form-control @error('vitalsignsesudah') is-invalid @enderror"
                                                name="tdsesudah" placeholder="TD...x/menit" value="{{ $formInputView->tdsesudah }}">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="text"
                                                class="form-control @error('vitalsignsesudah') is-invalid @enderror"
                                                name="nsesudah" placeholder="N...x/menit" value="{{ $formInputView->nsesudah }}">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="text"
                                                class="form-control @error('vitalsignsesudah') is-invalid @enderror"
                                                name="rsesudah" placeholder="R...x/menit" value="{{ $formInputView->rsesudah }}">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="text"
                                                class="form-control @error('vitalsignsesudah') is-invalid @enderror"
                                                name="sbsesudah" placeholder="Sb..." value="{{ $formInputView->sbsesudah }}">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col">
                                            <strong><label for="skalanyerisesudah" style="font-size:16px">Skala
                                                    Nyeri</label></strong>
                                            <input type="text"
                                                class="form-control @error('skalanyerisesudah') is-invalid @enderror"
                                                name="skalanyerisesudah"
                                                value="{{ $formInputView->skalanyerisesudah }}">
                                        </div>
                                        <div class="col">
                                            <strong><label for="lokasisesudah"
                                                    style="font-size:16px">Lokasi</label></strong>
                                            <input type="text"
                                                class="form-control @error('skalanyerisesudah') is-invalid @enderror"
                                                name="lokasisesudah" value="{{ $formInputView->lokasisesudah }}">
                                        </div>
                                    </div><br>

                                    <strong><label for="resikojatuhsesudah" style="font-size:16px">Resiko
                                            Jatuh</label></strong>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="resikojatuhsesudah"
                                            id="rendahsesudah" value="Rendah"
                                            {{ $formInputView->resikojatuhsesudah == 'Rendah' ? "checked" :"" }}>
                                        <label class="form-check-label" for="rendahsesudah">Rendah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="resikojatuhsesudah"
                                            id="sedangsesudah" value="Sedang"
                                            {{ $formInputView->resikojatuhsesudah == 'Sedang' ? "checked" :"" }}>
                                        <label class="form-check-label" for="sedangsesudah">Sedang</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="resikojatuhsesudah"
                                            id="tinggisesudah" value="Tinggi"
                                            {{ $formInputView->resikojatuhsesudah == 'Tinggi' ? "checked" :"" }}>
                                        <label class="form-check-label" for="tinggisesudah">Tinggi</label>
                                    </div>
                                </div>

                            </div>
                            <div><br>
                                <h3><strong>II. Pemberian Terapi</strong></h3>
                                <br>
                                <div class="row">
                                    <div class="col-md">
                                        <strong><label for="infussebelum" style="font-size:16px">Infus</label></strong>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control @error('infussebelum') is-invalid @enderror"
                                                    name="infussebelum" value="{{ $formInputView->infussebelum }}">

                                                <div class="input-group-append">
                                                    <label class="input-group-text"
                                                        for="tanggalpemasangansebelum">Tanggal
                                                        Pemasangan</label>
                                                </div>
                                                <input type="date"
                                                    class="form-control @error('tanggalpemasangansebelum') is-invalid @enderror"
                                                    name="tanggalpemasangansebelum"
                                                    value="{{ $formInputView->tanggalpemasangansebelum }}">
                                            </div>
                                        </div>
                                        <strong><label for="dcsebelum" style="font-size:16px">Dc</label></strong>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control @error('dcsebelum') is-invalid @enderror"
                                                    name="dcsebelum" value="{{ $formInputView->dcsebelum }}">

                                                <div class="input-group-append">
                                                    <label class="input-group-text"
                                                        for="tanggalpemasangandcsebelum">Tanggal
                                                        Pemasangan</label>
                                                </div>
                                                <input type="date"
                                                    class="form-control @error('tanggalpemasangandcsebelum') is-invalid @enderror"
                                                    name="tanggalpemasangandcsebelum"
                                                    value="{{ $formInputView->tanggalpemasangandcsebelum }}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <strong><label for="injeksiyangdiberikan" style="font-size:16px">Obat
                                            oral/
                                            injeksi yang diberikan :</label></strong>
                                    <input type="text"
                                        class="form-control @error('injeksiyangdiberikan') is-invalid @enderror"
                                        name="injeksiyangdiberikan" value="{{ $formInputView->injeksiyangdiberikan }}">
                                </div>
                                <br>
                                <h3><strong>III. Tindakan Medis Yang Telah Dilakukan
                                    </strong></h3>
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control @error('tindakanmedisyangdilakukan') is-invalid @enderror"
                                        name="tindakanmedisyangdilakukan"
                                        value="{{ $formInputView->tindakanmedisyangdilakukan }}">
                                </div><br>
                                <h3><strong>IV. Informasi Khusus </strong></h3>
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control @error('informasikhusus') is-invalid @enderror"
                                        name="informasikhusus" value="{{ $formInputView->informasikhusus }}">
                                </div><br>

                                <br>
                                <h3><strong>V. Lain-Lain </strong></h3>
                                <div class="form-group">
                                    <strong><label for="pemberianobat" style="font-size:16px">Catatan
                                            Pemberian
                                            Obat</label></strong><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="pemberianobat" id="yaobat"
                                            value="ya" {{ $formInputView->pemberianobat == 'ya' ? "checked" :"" }}>
                                        <label class="form-check-label" for="yaobat">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="pemberianobat"
                                            id="tidakobat" value="tidak"
                                            {{ $formInputView->pemberianobat == 'tidak' ? "checked" :"" }}>
                                        <label class="form-check-label" for="tidakobat">Tidak</label>
                                    </div><br>

                                    <strong><label for="hasillabo" style="font-size:16px">Hasil
                                            Laboratorium</label></strong><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="hasillabo" id="yalabo"
                                            value="ya" {{ $formInputView->hasillabo == 'ya' ? "checked" :"" }}>
                                        <label class="form-check-label" for="yalabot">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="hasillabo" id="tidaklabo"
                                            value="tidak" {{ $formInputView->hasillabo == 'tidak' ? "checked" :"" }}>
                                        <label class="form-check-label" for="hasillabo">Tidak</label>
                                    </div><br>
                                    <strong><label for="hasilradio" style="font-size:16px">Hasil
                                            Radiologi</label></strong><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="hasilradio" id="yaradio"
                                            value="ya" {{ $formInputView->hasilradio == 'ya' ? "checked" :"" }}>
                                        <label class="form-check-label" for="yaradio">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="hasilradio" id="tidakradio"
                                            value="tidak" {{ $formInputView->hasilradio == 'tidak' ? "checked" :"" }}>
                                        <label class="form-check-label" for="hasilradio">Tidak</label>
                                    </div><br>
                                    <strong><label for="persetujuan" style="font-size:16px">Surat
                                            Persetujuan
                                            Tindakan</label><br></strong>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="persetujuan" id="yasetuju"
                                            value="ya" {{ $formInputView->persetujuan == 'ya' ? "checked" :"" }}>
                                        <label class="form-check-label" for="yasetuju">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" name="persetujuan"
                                            id="tidaksetuju" value="tidak"
                                            {{ $formInputView->persetujuan == 'tidak' ? "checked" :"" }}>
                                        <label class="form-check-label" for="tidaksetuju">Tidak</label>
                                    </div>

                                    
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endsection