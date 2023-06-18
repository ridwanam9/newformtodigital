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
                                <li class="breadcrumb-item"><a href="{{ route('dashboard/page') }}">Dashboard</a></li>
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

                                <div class="card-body">
                                    <form action="{{route('form/input2/update')}}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <h3><strong>Data Diri</strong></h3>
                                        <br>
                                        <input type="hidden" name="id" value="{{ $formInputView2->id }}">

                                        <div class="form-group">
                                            <h4><strong><label for="nama">Nama</label></strong></h4>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                name="nama" value="{{ $formInputView2->nama }}">
                                        </div>
                                        <div class="form-group">
                                            <h4><strong><label for="norm">No Rekam Medis</label></strong></h4>
                                            <input type="text" class="form-control @error('norm') is-invalid @enderror"
                                                name="norm" value="{{ $formInputView2->norm }}">
                                        </div>
                                        <div class="form-group">
                                            <h4><strong><label for="tanggallahir">Tanggal Lahir</label></strong></h4>
                                            <input type="date"
                                                class="form-control @error('tanggallahir') is-invalid @enderror"
                                                name="tanggallahir" value="{{ $formInputView2->tanggallahir }}">
                                        </div>

                                        <div class="form-group">
                                            <h4><strong><label for="alamat">Alamat</label></strong></h4>
                                            <input type="text"
                                                class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                                value="{{ $formInputView2->alamat }}">
                                        </div>
                                </div>

                                <div class="form-group">

                                    <h4><label for="exampleInputBorder"><strong>1. Gejala seperti mau muntah dan
                                                kesulitan bernafas</strong> </label></h4>
                                    <div class="row">


                                        <div class="col-sm-6">
                                            <label><strong>1.1. Kegawatan pernafasan</strong></label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kegawatanpernafasan[]" id="dyspnoe"
                                                    {{-- value="dyspnoe" --}}
                                                    <?php if (strpos($formInputView2['kegawatanpernafasan'],'dyspnoe') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="dyspnoe">Dyspnoe</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kegawatanpernafasan[]" id="nafastakteratur"
                                                    {{-- value="nafastakteratur" --}}
                                                    <?php if (strpos($formInputView2['kegawatanpernafasan'],'nafastakteratur') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="nafastakteratur">Nafas Tak
                                                    Teratur</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kegawatanpernafasan[]" id="adasekret"
                                                    {{-- value="adasekret" --}}
                                                    <?php if (strpos($formInputView2['kegawatanpernafasan'],'adasekret') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="ada-sekret">Ada
                                                    sekret</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kegawatanpernafasan[]" id="nafas-cepat-dan-dangkal"
                                                    {{-- value="nafascepatdandangkal" --}}
                                                    <?php if (strpos($formInputView2['kegawatanpernafasan'],'nafascepatdandangkal') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="nafas-cepat-dan-dangkal">Nafas
                                                    cepat dan
                                                    dangkal</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kegawatanpernafasan[]" id="nafas-melalui-mulut"
                                                    {{-- value="nafasmelaluimulut" --}}
                                                    <?php if (strpos($formInputView2['kegawatanpernafasan'],'nafasmelaluimulut') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="nafas-melalui-mulut">Nafas melalui
                                                    mulut</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kegawatanpernafasan[]" id="spo2-normal"
                                                    {{-- value="spo2normal" --}}
                                                    <?php if (strpos($formInputView2['kegawatanpernafasan'],'spo2normal') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="spo2-normal">SpO2normal</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kegawatanpernafasan[]" id="nafaslambat"
                                                    {{-- value="nafaslambat" --}}
                                                    <?php if (strpos($formInputView2['kegawatanpernafasan'],'nafaslambat') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="nafaslambat">Nafas
                                                    lambat</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kegawatanpernafasan[]" id="mukosaoralkering"
                                                    {{-- value="mukosaoralkering" --}}
                                                    <?php if (strpos($formInputView2['kegawatanpernafasan'],'mukosaoralkering') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="mukosaoralkering">Mukosa oral
                                                    kering</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kegawatanpernafasan[]" id="takkegawatan"
                                                    {{-- value="tak" --}}
                                                    <?php if (strpos($formInputView2['kegawatanpernafasan'],'tak') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="takkegawatan">T.A.K</label>
                                            </div><br>


                                        </div>

                                        <div class="col-sm-6">
                                            <label><strong>1.2. Kehilangan Tinus otot</strong></label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kehilangantinusotot[]" id="mualkehilangan" value="mual"
                                                    <?php if (strpos($formInputView2['kehilangantinusotot'],'mual') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="mualkehilangan">Mual</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kehilangantinusotot[]" id="sulitmenelan" value="sulitmenelan"
                                                    <?php if (strpos($formInputView2['kehilangantinusotot'],'sulitmenelan') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="sulitmenelan">Sulit
                                                    menelan</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kehilangantinusotot[]" id="inkontinesia" value="inkontinesia"
                                                    <?php if (strpos($formInputView2['kehilangantinusotot'],'inkontinesia') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="inkontinesia">Inkontinensia
                                                    alvi</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kehilangantinusotot[]" id="penurunanpergerakan"
                                                    value="penurunanpergerakan"
                                                    <?php if (strpos($formInputView2['kehilangantinusotot'],'penurunanpergerakan') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="penurunanpergerakan">Penurunan
                                                    Pergerakan tubuh</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kehilangantinusotot[]" id="distensiabdomen"
                                                    value="distensiabdomen"
                                                    <?php if (strpos($formInputView2['kehilangantinusotot'],'distensiabdomen') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="distensiabdomen">Distensi
                                                    Abdomen</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kehilangantinusotot[]" id="takkehilangan" value="tak"
                                                    <?php if (strpos($formInputView2['kehilangantinusotot'],'tak') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="takkehilangan">T.A.K</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kehilangantinusotot[]" id="sulitberbicara"
                                                    value="sulitberbicara"
                                                    <?php if (strpos($formInputView2['kehilangantinusotot'],'sulitberbicara') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="sulitberbicara">Sulit
                                                    Berbicara</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="kehilangantinusotot[]" id="inkontinensiaurine"
                                                    value="inkontinensiaurine"
                                                    <?php if (strpos($formInputView2['kehilangantinusotot'],'inkontinensiaurine') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="inkontinensiaurine">Inkontinensia
                                                    Urine</label>
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <label><strong>1.3. Nyeri </strong></label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nyeri" id="tidak"
                                                    value="tidak" onclick="toggleInput1(this)"
                                                    {{ $formInputView2->nyeri == 'tidak' ? "checked" :"" }}>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nyeri" id="ya"
                                                    value="ya" onclick="toggleInput1(this)"
                                                    {{ $formInputView2->nyeri == 'ya' ? "checked" :"" }}>
                                                <label class="form-check-label" for="ya">Ya</label>

                                            </div>
                                            <div class="form-group" id="input-container1" style="display: none;">
                                                <h6>jika ya tuliskan bagian nyerinya</h6>
                                                <input type="text" class="form-control" id="bagiannyeri" name="bagiannyeri"
                                                    class="form-control @error('bagiannyeri') is-invalid @enderror"
                                                    value="{{ $formInputView2->bagiannyeri }}">
                                            </div>

                                            <script>
                                            function toggleInput1(radio) {
                                                var inputContainer = document.getElementById(
                                                    "input-container1");
                                                    var bagiannyeri = document.getElementById(
                                                    "bagiannyeri");
                                                if (radio.value === "ya") {
                                                    inputContainer.style.display = "block";
                                                    bagiannyeri.disabled = false;
                                                } else {
                                                    inputContainer.style.display = "none";
                                                    bagiannyeri.disabled = true;
                                                }
                                            }
                                            </script>
                                        </div>

                                        <div class="col-sm-6">
                                            <label><strong>1.4. Perlambatan sirkulasi</strong></label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="perlambatansirkulasi[]" id="bercakdansianosis"
                                                    value="bercakdansianosis"
                                                    <?php if (strpos($formInputView2['perlambatansirkulasi'],'bercakdansianosis') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="bercakdansianosis">Bercak dan
                                                    Sianosis pada
                                                    ekstemitas</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="perlambatansirkulasi[]" id="gelisah" value="gelisah"
                                                    <?php if (strpos($formInputView2['perlambatansirkulasi'],'gelisah') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="gelisah">Gelisah</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="perlambatansirkulasi[]" id="lemas" value="lemas"
                                                    <?php if (strpos($formInputView2['perlambatansirkulasi'],'lemas') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="lemas">Lemas</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="perlambatansirkulasi[]" id="kulitdingin" value="kulitdingin"
                                                    <?php if (strpos($formInputView2['perlambatansirkulasi'],'kulitdingin') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="kulitdingin">kulit
                                                    dingin dan berkeringat</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="perlambatansirkulasi[]" id="tekanandarah" value="tekanandarah"
                                                    <?php if (strpos($formInputView2['perlambatansirkulasi'],'tekanandarah') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="tekanandarah">Tekanan darah
                                                    menurun</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="perlambatansirkulasi[]" id="nadilambat" value="nadilambat"
                                                    <?php if (strpos($formInputView2['perlambatansirkulasi'],'nadilambat') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="nadilambat">Nadi
                                                    lambat dan lemah</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="perlambatansirkulasi[]" id="takperlambatan" value="tak"
                                                    <?php if (strpos($formInputView2['perlambatansirkulasi'],'tak') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="takperlambatan">T.A.K</label>
                                            </div>

                                        </div>
                                    </div><br>

                                    <h4><label for="exampleInputBorder"><strong>2. Faktor-faktor yang
                                                meningkatkan dan membangkitkan gejala fisik:</strong>
                                        </label></h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="aktivitasfisik"
                                                    name="faktorgejalafisik[]" value="melakukan-aktifitas-fisik"
                                                    <?php if (strpos($formInputView2['faktorgejalafisik'],'melakukan-aktifitas-fisik') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="aktivitasfisik">Melakukan aktivitas
                                                    fisik</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pindahposisi"
                                                    name="faktorgejalafisik[]" value="pindah-posisi"
                                                    <?php if (strpos($formInputView2['faktorgejalafisik'],'pindah-posisi') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="pindahposisi">Pindah Posisi</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lainnyacheckbox"
                                                    <?php if (strpos($formInputView2['faktorgejalafisik'],'lainnyacheckbox') !== false) echo 'checked="checked"'; ?>
                                                    <label class="form-check-label"
                                                    for="lainnyacheckbox">Lainnya:</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-control" type="text" id="lainnyainput"
                                                    name="faktorgejalafisiklainnya"
                                                    class="form-control @error('faktorgejalafisiklainnya') is-invalid @enderror"
                                                    value="{{ $formInputView2->faktorgejalafisiklainnya }}">
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
                                            if (this.value != '') {
                                                inputCheckboxLainnya.checked = true;
                                            } else {
                                                inputCheckboxLainnya.checked = false;
                                            }
                                        });
                                        </script>

                                    </div>
                                </div> <br>

                                <h4><label for="exampleInputBorder"><strong>3. Manajemen gejala saat ini
                                            dan respon pasien</strong> </label> </h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label><strong>Masalah keperawatan*</strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="manajemengejala[]"
                                                id="mualmanajemen" value="mual"
                                                <?php if (strpos($formInputView2['manajemengejala'],'mual') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label">Mual</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="manajemengejala[]"
                                                id="perubahanpersepsi" value="perubahanpersepsi"
                                                <?php if (strpos($formInputView2['manajemengejala'],'perubahanpersepsi') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="perubahanpersepsi">Perubahan persepsi
                                                sensori</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="manajemengejala[]"
                                                id="nyeriakut" value="nyeriakut"
                                                <?php if (strpos($formInputView2['manajemengejala'],'nyeriakut') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="nyeriakut">Nyeri
                                                akut</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="manajemengejala[]"
                                                id="polanafas" value="polanafas"
                                                <?php if (strpos($formInputView2['manajemengejala'],'polanafas') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="polanafas">Pola
                                                nafas tidak efektif</label>
                                        </div> <br>
                                    </div>

                                    <div class="col-sm-6">
                                        <label><strong></strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="manajemengejala[]"
                                                id="konstipasi" value="konstipasi"
                                                <?php if (strpos($formInputView2['manajemengejala'],'konstipasi') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="konstipasi">Konstipasi</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="manajemengejala[]"
                                                id="nyerikronis" value="nyerikronis"
                                                <?php if (strpos($formInputView2['manajemengejala'],'nyerikronis') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="nyerikronis">Nyeri
                                                kronis</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="manajemengejala[]"
                                                id="bersihanjalan" value="bersihanjalan"
                                                <?php if (strpos($formInputView2['manajemengejala'],'bersihanjalan') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="bersihanjalan">Bersihan jalan nafas
                                                tidak
                                                efektif</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="manajemengejala[]"
                                                id="defisitperawatan" value="defisitperawatan"
                                                <?php if (strpos($formInputView2['manajemengejala'],'defisitperawatan') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="defisitperawatan">Defisit perawatan
                                                diri</label>
                                        </div>
                                    </div><br>

                                    <div class="col-sm-6">
                                        <h4><label for="exampleInputBorder"><strong>4. Orientasi
                                                    spiritual pasien dan keluarga</strong> </label></h4>
                                        <label><strong>Apakah perlu pelayanan
                                                spiritual?</strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="orientasispiritual"
                                                value="tidak" id="tidak61" onclick="spiritual(this)"
                                                {{ $formInputView2->orientasispiritual == 'tidak' ? "checked" :"" }}>
                                            <label class="form-check-label" for="tidak">Tidak</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="orientasispiritual"
                                                value="ya" id="ya61" onclick="spiritual(this)"
                                                {{ $formInputView2->orientasispiritual == 'ya' ? "checked" :"" }}>
                                            <label class="form-check-label" for="ya">Ya</label>
                                        </div>

                                        <div class="form-group" id="layanan_spiritual" style="display: none;">
                                            <h6>jika Oleh siapa Layanannya</h6>
                                            <input type="text" class="form-control" id="layananoleh" name="oleh"
                                                class="form-control @error('oleh') is-invalid @enderror"
                                                value="{{ $formInputView2->oleh }}">
                                        </div>

                                        <script>
                                        function spiritual(radio) {
                                            var spirit = document.getElementById(
                                                "layanan_spiritual");
                                                var layananoleh = document.getElementById(
                                                "layananoleh");
                                            if (radio.value === "ya") {
                                                spirit.style.display = "block";
                                                layananoleh.disabled = false;
                                            } else {
                                                spirit.style.display = "none";
                                                layananoleh.disabled = true;
                                            }
                                        }
                                        </script>
                                    </div>
                                </div> <br>

                                <h4><label for="exampleInputBorder"><strong>5. Urusan dan kebutuhan
                                            spiritual pasien dan keluarga seperti putus asa,
                                            penderitaan,
                                            rasa bersalah atau pengampunan:
                                        </strong> </label> </h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label><strong>Perlu didoakan:</strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="perludidoakan"
                                                value="tidak" id="tidakdidoakan"
                                                {{ $formInputView2->perludidoakan == 'tidak' ? "checked" :"" }}>
                                            <label class="form-check-label" for="tidak">Tidak</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="perludidoakan" value="ya"
                                                id="yadidoakan"
                                                {{ $formInputView2->perludidoakan == 'ya' ? "checked" :"" }}>
                                            <label class="form-check-label" for="ya">Ya</label>
                                        </div><br>

                                        <label><strong>Perlu bimbingan rohani:</strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="perlubimbinganrohani"
                                                value="tidak" id="tidakbimbingan"
                                                {{ $formInputView2->perlubimbinganrohani == 'tidak' ? "checked" :"" }}>
                                            <label class="form-check-label" for="tidak">Tidak</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="perlubimbinganrohani"
                                                value="ya" id="yabimbingan"
                                                {{ $formInputView2->perlubimbinganrohani == 'ya' ? "checked" :"" }}>
                                            <label class="form-check-label" for="ya">Ya</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label><strong>Perlu pendampingan rohani</strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="perlupendampinganrohani"
                                                value="tidak" id="tidakpendampingan"
                                                {{ $formInputView2->perlupendampinganrohani == 'tidak' ? "checked" :"" }}>
                                            <label class="form-check-label" for="tidak">Tidak</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="perlupendampinganrohani"
                                                value="ya" id="yapendampingan"
                                                {{ $formInputView2->perlupendampinganrohani == 'ya' ? "checked" :"" }}>
                                            <label class="form-check-label" for="ya">Ya</label>
                                        </div>

                                    </div>
                                </div><br>

                                <h4><label><strong>6. Status prikososial dan keluarga</strong> </label></h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label><strong>6.1. Apakah ada orang yang ingin dihubungi
                                                saat ini?</strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="orangyangdihubungi"
                                                value="tidak" id="tidak61" onclick="orangdihubungi(this)"
                                                {{ $formInputView2->orangyangdihubungi == 'tidak' ? "checked" :"" }}>
                                            <label class="form-check-label" for="tidak">Tidak</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="orangyangdihubungi"
                                                value="ya" id="tidak61" onclick="orangdihubungi(this)"
                                                {{ $formInputView2->orangyangdihubungi == 'ya' ? "checked" :"" }}>
                                            <label class="form-check-label" for="tidak">Ya</label>
                                        </div>

                                        <div id="input-container2" style="display: none;">
                                            <label class="form-check-label">siapa: </label>
                                            <input type="text" class="form-control" name="siapa" id="siapa"
                                                class="form-control @error('siapa') is-invalid @enderror"
                                                value="{{ $formInputView2->siapa }}">
                                            <label class="form-check-label">Hubungan dengan
                                                pasien sebagai: </label>
                                            <input type="text" class="form-control" id="hubungansebagai"
                                                name="hubungansebagai"
                                                class="form-control @error('hubungansebagai') is-invalid @enderror"
                                                value="{{ $formInputView2->hubungansebagai }}">
                                            <label class="form-check-label">Dimana:</label>
                                            <input type="text" class="form-control" id="dimana" name="dimana"
                                                class="form-control @error('dimana') is-invalid @enderror"
                                                value="{{ $formInputView2->dimana }}">
                                            <label class="form-check-label">No. Telpon/HP:
                                            </label>
                                            <input type="text" class="form-control" id="telp" name="telp"
                                                class="form-control @error('telp') is-invalid @enderror"
                                                value="{{ $formInputView2->telp }}">
                                        </div>

                                        <script>
                                        function orangdihubungi(radio) {
                                            var inputContainer2 = document.getElementById(
                                                "input-container2");
                                            var hubungansebagai = document.getElementById(
                                                "hubungansebagai");
                                            var siapa = document.getElementById(
                                                "siapa");
                                            var dimana = document.getElementById(
                                                "dimana");
                                            var telp = document.getElementById(
                                                "telp");
                                            if (radio.value === "ya") {
                                                inputContainer2.style.display = "block";
                                                hubungansebagai.disabled = false;
                                                siapa.disabled = false;
                                                dimana.disabled = false;
                                                telp.disabled = false;
                                            } else if (radio.value === "tidak") {
                                                inputContainer2.style.display = "none";
                                                hubungansebagai.disabled = true;
                                                siapa.disabled = true;
                                                dimana.disabled = true;
                                                telp.disabled = true;

                                            }
                                        }
                                        </script>

                                        <label><strong>6.2. Bagaimana rencana perawatan
                                                selanjutnya?</strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rencanaperawatan"
                                                value="rawatdirs" id="tetapdirawatdirs" onclick="toggleinput5(this)"
                                                {{ $formInputView2->rencanaperawatan == 'rawatdirs' ? "checked" :"" }}>
                                            <label class="form-check-label" for="tetapdirawat">Tetap
                                                dirawat di RS</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rencanaperawatan"
                                                value="rawatdirumah" id="dirawatdirumah" onclick="toggleinput5(this)"
                                                {{ $formInputView2->rencanaperawatan == 'rawatdirumah' ? "checked" :"" }}>
                                            <label class="form-check-label" for="dirawatdirumah">Dirawat di
                                                rumah</label>
                                        </div>

                                        <div class="form-check" id="dirumah" style="display: none;">
                                            <label class="form-check-label">Apakah Lingkungan
                                                rumah
                                                sudah disiapkan</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lingkunganrumah"
                                                    value="tidak62a" id="tidak62a" onclick="toggleinput6(this)"
                                                    {{ $formInputView2->lingkunganrumah == 'tidak62a' ? "checked" :"" }}>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lingkunganrumah"
                                                    value="ya62a" id="ya62a" onclick="toggleinput6(this)"
                                                    {{ $formInputView2->lingkunganrumah == 'ya62a' ? "checked" :"" }}>
                                                <label class="form-check-label" for="ya">Ya</label>
                                            </div>
                                        </div>



                                        <div class="form-check" id="lingkunganrumahsiap" style="display: none;">
                                            <label class="form-check-label">Jika Ya, Apakah ada
                                                yang
                                                mampu ,merawat pasien di rumah?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="mampumerawat"
                                                    value="tidak62b" id="tidak62b" onclick="toggleinput7(this)"
                                                    {{ $formInputView2->mampumerawat == 'tidak62b' ? "checked" :"" }}>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="mampumerawat"
                                                    value="ya62b" id="ya62b" onclick="toggleinput7(this)"
                                                    {{ $formInputView2->mampumerawat == 'ya62b' ? "checked" :"" }}>
                                                <label class="form-check-label" for="ya">Ya</label>
                                            </div>

                                            <div class="form-group" id="input-container7" style="display: none;">
                                                <h6>Oleh</h6>
                                                <input type="text" class="form-control" id="olehsiapa"
                                                    name="siapaygmerawat"
                                                    class="form-control @error('siapaygmerawat') is-invalid @enderror"
                                                    value="{{ $formInputView2->siapaygmerawat }}">
                                            </div>
                                        </div>

                                        <script>

                                        </script>



                                        <div class="form-check" id="input-container8" style="display: none;">
                                            <label class="form-check-label">Jika tidak, apakah
                                                perlu
                                                difasilitasi RS (Home Care)?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="perlufasilitas"
                                                    value="ya" id="ya62c"
                                                    {{ $formInputView2->perlufasilitas == 'ya' ? "checked" :"" }}>
                                                <label class="form-check-label" for="ya">Ya</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="perlufasilitas"
                                                    value="tidak" id="tidak62c"
                                                    {{ $formInputView2->perlufasilitas == 'tidak' ? "checked" :"" }}>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                            </div>
                                        </div>

                                        <script>
                                        function toggleinput5(radio) {
                                            var inputContainer3 = document.getElementById(
                                                "dirumah");
                                            var inputContainer4 = document.getElementById(
                                                "lingkunganrumahsiap");
                                            var ya62a = document.getElementById('ya62a');
                                            var tidak62a = document.getElementById('tidak62a');
                                            var tidak62b = document.getElementById('tidak62b');
                                            var ya62b = document.getElementById('ya62b');
                                            var tidak62c = document.getElementById('tidak62c');
                                            var ya62c = document.getElementById('ya62c');
                                            var olehsiapa = document.getElementById('olehsiapa');


                                            if (radio.value === "rawatdirumah") {
                                                inputContainer3.style.display = "block";
                                                ya62a.disabled = false;
                                                tidak62a.disabled = false;
                                                tidak62b.disabled = false;
                                                ya62b.disabled = false;
                                                tidak62c.disabled = false;
                                                ya62c.disabled = false;
                                                olehsiapa.disabled = false;
                                            } else if (radio.value === "rawatdirs") {
                                                inputContainer3.style.display = "none";
                                                inputContainer4.style.display = "none";
                                                // ya62a.value = null;
                                                // tidak62a.value = null;
                                                // tidak62b.value = null;
                                                // ya62b.value = null;
                                                // tidak62c.value = null;
                                                // ya62c.value = null;
                                                // olehsiapa.value = null;

                                                ya62a.disabled = true;
                                                tidak62a.disabled = true;
                                                tidak62b.disabled = true;
                                                ya62b.disabled = true;
                                                tidak62c.disabled = true;
                                                ya62c.disabled = true;
                                                olehsiapa.disabled = true;
                                            }
                                        }

                                        function toggleinput6(radio) {
                                            var inputContainer4 = document.getElementById(
                                                "lingkunganrumahsiap");
                                            var inputContainer6 = document.getElementById(
                                                "input-container8");
                                            var tidak62b = document.getElementById('tidak62b');
                                            var ya62b = document.getElementById('ya62b');
                                            var tidak62c = document.getElementById('tidak62c');
                                            var ya62c = document.getElementById('ya62c');
                                            var olehsiapa = document.getElementById('olehsiapa');
                                            if (radio.value === "ya62a") {
                                                inputContainer4.style.display = "block";
                                                inputContainer6.style.display = "none";
                                                //tidak62c.value = null;
                                                //ya62c.value = null;
                                                tidak62c.disabled = true;
                                                ya62c.disabled = true;
                                                tidak62b.disabled = false;
                                                ya62b.disabled = false;
                                                olehsiapa.disabled = false;
                                            } else if (radio.value === "tidak62a") {
                                                inputContainer4.style.display = "none";
                                                inputContainer6.style.display = "block";
                                                // tidak62b.value = null;
                                                // ya62b.value = null;
                                                // olehsiapa.value = null;
                                                tidak62b.disabled = true;
                                                ya62b.disabled = true;
                                                olehsiapa.disabled = true;
                                                tidak62c.disabled = false;
                                                ya62c.disabled = false;
                                            }
                                        }

                                        function toggleinput7(radio) {
                                            var inputContainer5 = document.getElementById(
                                                "input-container7");
                                            var olehsiapa = document.getElementById('olehsiapa');
                                            if (radio.value === "ya62b") {
                                                inputContainer5.style.display = "block";
                                                olehsiapa.disabled = false;
                                            } else if (radio.value === "tidak62b") {
                                                inputContainer5.style.display = "none";
                                               // olehsiapa.value = null;
                                               olehsiapa.disabled = true;
                                            }
                                        }
                                        </script>

                                    </div>
                                    <br>

                                    <div class="col-sm-6">
                                        <label><strong>6.3. Reaksi pasien atas penyakitnya?</strong></label>
                                        <div class="col-sm-6">
                                            <label><strong> Asesmen
                                                    Informasi</strong></label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="asesmenreaksipasien[]" id="menyangkal" value="menyangkal"
                                                    <?php if (strpos($formInputView2['asesmenreaksipasien'],'menyangkal') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="menyangkal">Menyangkal</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="asesmenreaksipasien[]" id="marahpasien" value="marah"
                                                    <?php if (strpos($formInputView2['asesmenreaksipasien'],'marah') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="marahpasien">Marah</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="asesmenreaksipasien[]" id="sedih" value="sedih"
                                                    <?php if (strpos($formInputView2['asesmenreaksipasien'],'sedih') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="sedih">Sedih/menangis</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="asesmenreaksipasien[]" id="rasabersalahpasien"
                                                    value="rasabersalah"
                                                    <?php if (strpos($formInputView2['asesmenreaksipasien'],'rasabersalah') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="rasabersalahpasien">Rasa
                                                    bersalah</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="asesmenreaksipasien[]" id="ketidakberdayaan"
                                                    value="ketidakberdayaan"
                                                    <?php if (strpos($formInputView2['asesmenreaksipasien'],'ketidakberdayaan') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="ketidakberdayaan">Ketidak
                                                    Berdayaan</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="asesmenreaksipasien[]" id="takut" value="takut"
                                                    <?php if (strpos($formInputView2['asesmenreaksipasien'],'takut') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="takut">Takut</label>
                                            </div>
                                        </div><br>

                                        <div class="col-sm-6">
                                            <label><strong> Masalah
                                                    Keperawatan</strong></label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="masalahreaksipasien[]" id="anxietas" value="anxietas"
                                                    <?php if (strpos($formInputView2['masalahreaksipasien'],'anxietas') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="anxietas">Anxietas</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="masalahreaksipasien[]" id="distress" value="distress"
                                                    <?php if (strpos($formInputView2['masalahreaksipasien'],'distress') !== false) echo 'checked="checked"'; ?>>
                                                <label class="form-check-label" for="distress">Distress
                                                    Spiritual</label>
                                            </div>
                                        </div><br>

                                    </div>
                                </div>

                                <label><strong>6.4. Reaksi keluarga atas penyakit
                                        pasien</strong></label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label><strong> Asesmen
                                                Informasi</strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="asesmenreaksikeluarga[]" id="marahkeluarga" value="marah"
                                                <?php if (strpos($formInputView2['asesmenreaksikeluarga'],'marah') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="marahkeluarga">Marah</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="asesmenreaksikeluarga[]" id="gangguantidur"
                                                value="gangguantidurkeluarga"
                                                <?php if (strpos($formInputView2['asesmenreaksikeluarga'],'gangguantidur') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="gangguantidurkeluarga">Gangguan
                                                Tidur</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="asesmenreaksikeluarga[]" id="penurunankonsentrasi"
                                                value="penurunankonsentrasi"
                                                <?php if (strpos($formInputView2['asesmenreaksikeluarga'],'penurunankonsentrasi') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="penurunankonsentrasi">Penurunan
                                                Konsentrasi</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="asesmenreaksikeluarga[]" id="ketidakmampuan"
                                                value="ketidakmampuan"
                                                <?php if (strpos($formInputView2['asesmenreaksikeluarga'],'ketidakmampuan') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="ketidakmampuan">Ketidakmampuan
                                                memnuhi
                                                peran yang diharapkan</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="asesmenreaksikeluarga[]" id="keluargakurangberkomunikasi"
                                                value="keluargakurangberkomunikasi"
                                                <?php if (strpos($formInputView2['asesmenreaksikeluarga'],'keluargakurangberkomunikasi') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="keluargakurangberkomunikasi">Keluarga
                                                kurang berkomunikasi dengan
                                                pasien</label>
                                        </div><br>
                                    </div>

                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="asesmenreaksikeluarga[]" id="keluargakurangberpartisipasi"
                                                value="keluargakurangberpartisipasi"
                                                <?php if (strpos($formInputView2['asesmenreaksikeluarga'],'keluargakurangberpartisipasi') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="keluargakurangberpartisipasi">Keluarga
                                                kurang berpartisipasi membuat keputusan
                                                dalam
                                                perawatan pasien</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="asesmenreaksikeluarga[]" id="letih" value="letih"
                                                <?php if (strpos($formInputView2['asesmenreaksikeluarga'],'letih') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="letih">Letih/lelah</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="asesmenreaksikeluarga[]" id="rasabersalahkeluarga"
                                                value="rasabersalah"
                                                <?php if (strpos($formInputView2['asesmenreaksikeluarga'],'rasabersalah') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="rasabersalahkeluarga">Rasa
                                                Bersalah</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="asesmenreaksikeluarga[]" id="perubahankebiasaan"
                                                value="perubahankebiasaan"
                                                <?php if (strpos($formInputView2['asesmenreaksikeluarga'],'perubahankebiasaan') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="perubahankebiasaan">Perubahan
                                                kebiasaan
                                                pola komunikasi</label>
                                        </div><br>
                                    </div>

                                    <div class="col-sm-6">

                                        <label><strong> Masalah
                                                Keperawatan</strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="masalahreaksikeluarga[]" id="kopingindividu"
                                                value="kopingindividu"
                                                <?php if (strpos($formInputView2['masalahreaksikeluarga'],'kopingindividu') !== false) echo 'checked="checked"'; ?>>
                                            Koping individu
                                            tidak
                                            efektif</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="masalahreaksikeluarga[]" id="distressspiritual"
                                                value="distressspiritual"
                                                <?php if (strpos($formInputView2['masalahreaksikeluarga'],'distressspiritual') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="distressspiritual">Distress
                                                Spiritual</label>
                                        </div><br>
                                    </div>

                                    <div class="col-sm-12">
                                        <h4><strong>7. Kebutuhan dukungan atau kelonggaran pelayanan bagi
                                                pasien, keluarga & pemberi pelayanan lain :
                                            </strong>
                                        </h4>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="pasienperlu"
                                                name="kebutuhandukungan[]" value="Pasien perlu didampingi keluarga"
                                                <?php if (strpos($formInputView2['kebutuhandukungan'],'Pasien perlu didampingi keluarga') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="pasienperlu">Pasien perlu didampingi
                                                keluarga</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="keluargadapatmengunjungi" name="kebutuhandukungan[]"
                                                value="Keluarga dapat mengunjungi pasien di luar waktu"
                                                <?php if (strpos($formInputView2['kebutuhandukungan'],'Keluarga dapat mengunjungi pasien di luar waktu') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="keluargadapatmengunjungi">Keluarga
                                                dapat mengunjungi pasien di luar waktu</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sahabatdapatmengunjungi"
                                                name="kebutuhandukungan[]" value="Sahabat dapat mengunjungi pasien"
                                                <?php if (strpos($formInputView2['kebutuhandukungan'],'Sahabat dapat mengunjungi pasien') !== false) echo 'checked="checked"'; ?>>
                                            <label class="form-check-label" for="sahabatdapatmengunjungi">Sahabat dapat
                                                mengunjungi pasien di luar waktu</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="input-checkbox-lainnya">
                                            <label class="form-check-label"
                                                for="input-checkbox-lainnya">Lainnya:</label>
                                            <input class="form-control" type="text" id="input-text"
                                                name="kebutuhandukunganlainnya"
                                                class="form-control @error('kebutuhandukunganlainnya') is-invalid @enderror"
                                                value="{{ $formInputView2->kebutuhandukunganlainnya }}">
                                        </div><br>

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
                                                inputCheckboxLainnya1.checked = true;
                                            } else {
                                                inputCheckboxLainnya1.checked = false;
                                            }
                                        });
                                        </script>

                                        <h4><strong>8. Apakah ada kebutuhan akan alternatif atau
                                                timgkat pelayanan lain : </strong> </h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tidak"
                                                        name="kebutuhanalternatif[]" value="Tidak"
                                                        <?php if (strpos($formInputView2['kebutuhanalternatif'],'Tidak') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="tidak">Tidak</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="donasiorgan">
                                                    <label class="form-check-label" for="donasiorgan">Donasi Organ
                                                        :</label>
                                                    <input type="text" class="form-control" id="inputdonasiorgan"
                                                        name="donasiorgan"
                                                        class="form-control @error('donasiorgan') is-invalid @enderror"
                                                        value="{{ $formInputView2->donasiorgan }}">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="kebutuhanalternatif[]" id="autopsi" value="autopsi"
                                                        <?php if (strpos($formInputView2['kebutuhanalternatif'],'autopsi') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="autopsi">Autopsi</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="input-checkbox-lainnya1" name="kebutuhanalternatif[]"
                                                        value="lainnya">

                                                    <label class="form-check-label"
                                                        for="input-checkbox-lainnya1">Lainnya:</label>
                                                    <input type="text" id="input-text1"
                                                        name="kebutuhanalternatiflainnya"
                                                        class="form-control @error('kebutuhanalternatiflainnya') is-invalid @enderror"
                                                        value="{{ $formInputView2->kebutuhanalternatiflainnya }}">
                                                </div>
                                            </div>

                                            <script>
                                            const inputCheckboxLainnya3 = document.getElementById(
                                                'input-checkbox-lainnya1');
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
                                                    inputCheckboxLainnya3.checked = true;
                                                } else {
                                                    inputCheckboxLainnya3.checked = false;
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
                                                    inputCheckboxDonasi.checked = true;
                                                } else {
                                                    inputCheckboxDonasi.checked = false;
                                                }
                                            });
                                            </script>
                                        </div><br>

                                        <label><strong>Faktor resiko bagi keluarga yang ditinggalkan :
                                            </strong> </h4>
                                            <h5><strong>Asesmen informasi </strong>
                                        </label>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="asesmenfaktorresiko[]" id="marah" value="marahresiko"
                                                        <?php if (strpos($formInputView2['asesmenfaktorresiko'],'marah') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="marahresiko">Marah</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="asesmenfaktorresiko[]" id="depresi" value="depresi"
                                                        <?php if (strpos($formInputView2['asesmenfaktorresiko'],'depresi') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="depresi">Depresi</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="asesmenfaktorresiko[]" id="rasabersalah"
                                                        value="rasabersalah"
                                                        <?php if (strpos($formInputView2['asesmenfaktorresiko'],'rasabersalah') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="rasabersalah">Rasa
                                                        bersalah</label>
                                                </div><br>
                                            </div>

                                            <div class="col-sm-3">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="asesmenfaktorresiko[]" id="sedih" value="sedih"
                                                        <?php if (strpos($formInputView2['asesmenfaktorresiko'],'sedih') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="sedih">Sedih/menangis</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="asesmenfaktorresiko[]" id="letih" value="letih"
                                                        <?php if (strpos($formInputView2['asesmenfaktorresiko'],'letih') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="letih">Letih/lelah</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="asesmenfaktorresiko[]" id="gangguantidurresiko"
                                                        value="gangguantidur"
                                                        <?php if (strpos($formInputView2['asesmenfaktorresiko'],'gangguantidur') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="gangguantidurresiko">Gangguan
                                                        Tidur</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="asesmenfaktorresiko[]" id="penurunankonsentrasi"
                                                        value="penurunankonsentrasi"
                                                        <?php if (strpos($formInputView2['asesmenfaktorresiko'],'penurunankonsentrasi') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="penurunankonsentrasi">Penurunan
                                                        Konsentrasi</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="asesmenfaktorresiko[]" id="perubahankebiasaan"
                                                        value="perubahankebiasaan"
                                                        <?php if (strpos($formInputView2['asesmenfaktorresiko'],'perubahankebiasaan') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="perubahankebiasaan">Perubahan
                                                        kebiasaan pola komunikasi</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="asesmenfaktorresiko[]" id="ketidakmampuanmemenuhi"
                                                        value="ketidakmampuanmemenuhi"
                                                        <?php if (strpos($formInputView2['asesmenfaktorresiko'],'ketidakmampuanmemenuhi') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label"
                                                        for="ketidakmampuanmemenuhi">Ketidakmampuan memenuhi peran yang
                                                        diharapkan</label>
                                                </div>
                                            </div>
                                        </div>

                                        <h5><strong>Masalah Keperawatan </strong> </h5>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="masalahfaktorresiko[]" id="koplingindividu"
                                                        value="koplingindividu"
                                                        <?php if (strpos($formInputView2['masalahfaktorresiko'],'koplingindividu') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="koplingindividu">Koping
                                                        individu tidak
                                                        efektif</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="masalahfaktorresiko[]" id="distressspiritual"
                                                        value="distressspiritual"
                                                        <?php if (strpos($formInputView2['masalahfaktorresiko'],'distressspiritual') !== false) echo 'checked="checked"'; ?>>
                                                    <label class="form-check-label" for="distressspiritual">Distress
                                                        Spiritual</label>
                                                </div>
                                            </div>

                                        </div> <br>

                                        <button type="submit" class="btn btn-success">Update</button>

                                    </div>

                                </div>
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
