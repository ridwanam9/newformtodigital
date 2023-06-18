<!DOCTYPE html>
<html>

<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Asesmen Pasien</title>
    <!-- <link rel="stylesheet" href="resources\css\app.css"> -->
    <style>
    .page {
        position: relative;
    }

    .margin {
        margin-top: 60px;
        margin-bottom: 60px;
        margin-left: 30px;
        margin-right: 30px;
    }

    .padding {
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .paddingisi {
        padding-top: 10px;
        padding-bottom: 5px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .border {
        /* border-left: 6px solid black;
        height: 500px; */
        border-style: solid;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 10px;
        margin-left: 10px;
    }

    .border1 {
        /* border-left: 6px solid black;
        height: 500px; */
        border-style: solid;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-right: 10px;
        margin-left: 10px;
    }

    .my-text {
        background-color: black;
        border-style: solid;
        padding: 10px;
    }

    h1 {
        color: white;
        text-align: center;
        /* style= font-family: 'Open Sans', sans-serif; */

    }

    .wrapper {
        display: flex;
        flex-direction: row;
    }

    .left {
        width: 50%;
    }

    .right {
        width: 50%;
    }

    .align-left {
        align-left: center;
    }

    input[type="checkbox"] {
        transform: scale(1.5);
        /* border: 2px solid blue; */
    }

    input[type="text"] {
        border: collapse;
    }

    @font-face {
        font-family: "Cambria Math";
        panose-1: 2 4 5 3 5 4 6 3 2 4;
    }

    @font-face {
        font-family: Calibri;
        panose-1: 2 15 5 2 2 2 4 3 2 4;
    }

    /* Style Definitions */
    p.MsoNormal,
    li.MsoNormal,
    div.MsoNormal {
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8.0pt;
        margin-left: 0cm;
        line-height: 107%;
        font-size: 11.0pt;
        font-family: "Calibri", sans-serif;
    }

    .MsoChpDefault {
        font-family: "Calibri", sans-serif;
    }

    .MsoPapDefault {
        margin-bottom: 8.0pt;
        line-height: 107%;
    }

    /* @page WordSection1 {
        size: 595.3pt 841.9pt;
        margin: 72.0pt 72.0pt 72.0pt 72.0pt;
    } */

    @page {
        size: A4;
        /* margin: 10px; */
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 20px;
        margin-right: 20px;
        border-style: solid;
    }

    div.WordSection1 {
        page: WordSection1;
    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: 200%;
        /* padding: 20px; */
        margin-top: 0px;

        box-sizing: border-box;
    }

    .table {
        border-collapse: collapse;
        width: 30%;
    }

    .table th,
    .table td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
    }

    .table th {
        background-color: gray;
        color: white;
    }

    /* .container {
        text-align: justify;
        /* membuat teks rata kanan kiri */
    /*direction: ltr;*/
    /* membuat teks mulai dari kiri ke kanan */
    /*} */

    .text {
        text-indent: 10px;
        /* membuat teks menjorok ke kanan sejauh 20 piksel */
    }

    .container1 {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    .labelsize {
        font-size: 14px;
        padding-top: 20px;
    }

    .labelsize1 {
        font-size: 16px;
        padding-top: 20px;
    }

    input[type="checkbox"] {
        -webkit-transform: scale(0.8);
        /* Safari, Chrome dan Opera */
        transform: scale(0.8);
    }

    input[type=text],
    select {
        width: 10%;
        /* padding: 10px 18px;
        margin: 5px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 10px; */
        font-size: 14px;
        box-sizing: border-box;
    }

    .my-table {
        margin-left: auto;
        margin-right: 0;
        /* border-left: 1px solid black; */
    }

    .garis_vertikal {
        border-left: 1px black solid;
        height: 170px;
        width: 0px;
        margin-left: auto;
    }

    #my-element {
        padding-bottom: 20px;
    }

    #my-element h4 {
        clear: both;
    }

    .textpadding {

        padding-right: 20px;
    }

    .my-heading {
        font-size: 19px;
    }

    
</head>

<body>
    <!-- <div class="margin"> -->
        <div class="border">
            <div style="display: flex; align-items: center;">

                <div style="text-align: right;">
                    <table class="my-table">
                        <tr>
                            <img src="assets/img/pku.png" alt="Gambar ilustrasi" width="300" height="150"
                                style="margin-right: 200px;">

                            <td>
                                <span>Nama              : {{ $dataFormInput2->nama }}</span><br>
                                <span>No. MR            : {{ $dataFormInput2->norm }}</span><br>
                                <span>Tanggal Lahir     : {{ $dataFormInput2->tanggallahir }}</span><br>
                                <span>Alamat            : {{ $dataFormInput2->alamat }}</span><br>
                            </td>
                        </tr>
                    </table>
                    
                </div>

            </div>

        </div>

        <div class="border1">

            <div class="my-text">
                <h1 class="my-heading">ASESMEN PASIEN KONDISI PASIEN </h1>
            </div>

            <div class="paddingisi">

                <div class="container">

                    <h4>1. Gejala seperti mau muntah dan kesulitan bernafas</h4>
                    <!-- <div class="container"> -->
                    <p>
                        1.1. Kegawatan Pernafasan:
                    </p>
                    <div class="container1">

                        <table>
                            <tr>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kegawatanpernafasan[]" value="dyspnoe"
                                        <?php if (strpos($dataFormInput2['kegawatanpernafasan'], 'dyspnoe') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Dyspnoe</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kegawatanpernafasan[]" value="nafascepatdandangkal"
                                        <?php if (strpos($dataFormInput2['kegawatanpernafasan'], 'nafascepatdandangkal') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" style="padding-top:-10px !important" for="tidak">Nafas
                                        Cepat
                                        dan Dangkal</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kegawatanpernafasan[]" value="adasekret"
                                        <?php if (strpos($dataFormInput2['kegawatanpernafasan'], 'adasekret') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Ada Sekret</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kegawatanpernafasan[]" value="nafastakteratur"
                                        <?php if (strpos($dataFormInput2['kegawatanpernafasan'], 'nafastakteratur') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Nafas Tak Teratur</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kegawatanpernafasan[]" value="nafasmelaluimulut"
                                        <?php if (strpos($dataFormInput2['kegawatanpernafasan'], 'nafasmelaluimulut') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Nafas Melalui Mulut</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kegawatanpernafasan[]" value="spo2normal"
                                        <?php if (strpos($dataFormInput2['kegawatanpernafasan'], 'spo2normal') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Spo < 2normal</label>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kegawatanpernafasan[]" value="nafaslambat"
                                        <?php if (strpos($dataFormInput2['kegawatanpernafasan'], 'nafaslambat') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Nafas Lambat</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kegawatanpernafasan[]" value="mukosaoralkering"
                                        <?php if (strpos($dataFormInput2['kegawatanpernafasan'], 'mukosaoralkering') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Mukosa Oral Kering</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kegawatanpernafasan[]" value="tak"
                                        <?php if (strpos($dataFormInput2['kegawatanpernafasan'], 'tak') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">T.A.K</label>
                                </td>

                            </tr>
                        </table>


                    </div>

                    <p>
                        1.2. Kehilangan Tinus Otot:
                    </p>
                    <div class="container1">
                        <table>
                            <tr>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kehilangantinusotot[]" value="mual"
                                        <?php if (strpos($dataFormInput2['kehilangantinusotot'], 'mual') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Mual</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kehilangantinusotot[]" value="sulitmenelan"
                                        <?php if (strpos($dataFormInput2['kehilangantinusotot'], 'sulitmenelan') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Sulit Menelan</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kehilangantinusotot[]" value="inkontinesia"
                                        <?php if (strpos($dataFormInput2['kehilangantinusotot'], 'inkontinesia') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Inkontinensia alvi</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kehilangantinusotot[]" value="penurunanpergerakan"
                                        <?php if (strpos($dataFormInput2['kehilangantinusotot'], 'penurunanpergerakan') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Penurunan Pergerakan tubuh</label>
                                </td>
                            </tr>
                            <tr>
                                <td>


                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kehilangantinusotot[]" value="tak"
                                        <?php if (strpos($dataFormInput2['kehilangantinusotot'], 'tak') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">T.A.K</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kehilangantinusotot[]" value="sulitberbicara"
                                        <?php if (strpos($dataFormInput2['kehilangantinusotot'], 'sulitberbicara') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Sulit Berbicara</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kehilangantinusotot[]" value="distensiabdomen"
                                        <?php if (strpos($dataFormInput2['kehilangantinusotot'], 'distensiabdomen') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Distensi Abdomen</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="kehilangantinusotot[]" value="inkontinensiaurine"
                                        <?php if (strpos($dataFormInput2['kehilangantinusotot'], 'inkontinensiaurine') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Inkontinensia Urine</label>
                                </td>
                            </tr>

                        </table>

                    </div>

                    <p>
                        1.3. Nyeri:
                    </p>
                    <div class="container1">
                        <input type="radio" style="margin-bottom: -5px !important" name="nyeri" value="tidak"
                            {{ $dataFormInput2->nyeri == 'tidak' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Tidak</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="nyeri" value="ya"
                            {{ $dataFormInput2->nyeri == 'ya' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Ya</label><br>
                        <label class="labelsize">Bagian Nyeri:</label><br>
                        <input type="text" class="form-control" id="ya" name="bagiannyeri"
                            class="form-control @error('bagiannyeri') is-invalid @enderror"
                            value="{{ $dataFormInput2->bagiannyeri }}">
                    </div>
                    <p>
                        1.4. Perlambatan Sirkulasi:
                    </p>
                    <div class="container1">
                        <table>
                            <tr>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="perlambatansirkulasi[]" value="bercakdansianosis"
                                        <?php if (strpos($dataFormInput2['perlambatansirkulasi'], 'bercakdansianosis') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Bercak dan Sianosis</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="perlambatansirkulasi[]" value="gelisah"
                                        <?php if (strpos($dataFormInput2['perlambatansirkulasi'], 'gelisah') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Gelisah</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="perlambatansirkulasi[]" value="lemas"
                                        <?php if (strpos($dataFormInput2['perlambatansirkulasi'], 'lemas') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">lemas</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="perlambatansirkulasi[]" value="kulitdingin"
                                        <?php if (strpos($dataFormInput2['perlambatansirkulasi'], 'kulitdingin') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Kulit Dingin</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="perlambatansirkulasi[]" value="tekanandarah"
                                        <?php if (strpos($dataFormInput2['perlambatansirkulasi'], 'tekanandarah') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Tekanan Darah</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="perlambatansirkulasi[]" value="nadilambat"
                                        <?php if (strpos($dataFormInput2['perlambatansirkulasi'], 'nadilambat') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Nadi Lambat</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="perlambatansirkulasi[]" value="tak"
                                        <?php if (strpos($dataFormInput2['perlambatansirkulasi'], 'tak') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">T.A.K</label>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <h4>2. Faktor-faktor yang meningkatkan dan membangkitkan gejala fisik :</h4>
                <div class="container1">
                    <table>
                        <tr>
                            <td>
                                <input type="checkbox" style="margin-bottom: -6px !important" name="faktorgejalafisik[]"
                                    value="melakukan-aktifitas-fisik"
                                    <?php if (strpos($dataFormInput2['faktorgejalafisik'], 'melakukan-aktifitas-fisik') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Melakukan Aktifitas Fisik</label>


                                <input type="checkbox" style="margin-bottom: -6px !important" name="faktorgejalafisik[]"
                                    value="pindah-posisi"
                                    <?php if (strpos($dataFormInput2['faktorgejalafisik'], 'pindah-posisi') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Pindah Posisi</label>
                            </td>
                        </tr>
                        <label class="labelsize">Faktor Lainnya:</label><br>

                        <input type="text" class="form-control" id="ya" style="margin-bottom: -6px !important"
                            name="faktorgejalafisiklainnya"
                            class="form-control @error('bagiannyeri') is-invalid @enderror"
                            value="{{ $dataFormInput2->faktorgejalafisiklainnya }}">

                    </table>
                </div>

                <h4>3. Manajemen gejala saat ini da respon pasien: </h4>
                <div class="container">

                    <label class="labelsize1">Masalah Keperawatan:</label><br>
                    <div class="container1">
                        <table>
                            <tr>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="manajemengejala[]" value="mual"
                                        <?php if (strpos($dataFormInput2['manajemengejala'], 'mual') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Mual efektif</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="manajemengejala[]" value="perubahanpersepsi"
                                        <?php if (strpos($dataFormInput2['manajemengejala'], 'perubahanpersepsi') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Perubahan persepsi Sensori</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="manajemengejala[]" value="nyeriakut"
                                        <?php if (strpos($dataFormInput2['manajemengejala'], 'nyeriakut') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Nyeri akut</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="manajemengejala[]" value="polanafas"
                                        <?php if (strpos($dataFormInput2['manajemengejala'], 'polanafas') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Pola Nafas tidak efektif</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="manajemengejala[]" value="konstipasi"
                                        <?php if (strpos($dataFormInput2['manajemengejala'], 'konstipasi') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Konstipasi</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="manajemengejala[]" value="bersihanjalan"
                                        <?php if (strpos($dataFormInput2['manajemengejala'], 'bersihanjalan') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Bersihan jalan nafas tidak</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="manajemengejala[]" value="nyerikronis"
                                        <?php if (strpos($dataFormInput2['manajemengejala'], 'nyerikronis') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Nyeri Kronis</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="manajemengejala[]" value="defisitperawatan"
                                        <?php if (strpos($dataFormInput2['manajemengejala'], 'defisitperawatan') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Defisit perawatan diri</label>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <h4>4. Orientasi spiritual paaasien dan keluarga : </h4>
                <div class="container">

                    <label class="labelsize1">Apakah perlu pelayanan spiritual ?</label><br>
                    <div class="container1">
                        <input type="radio" style="margin-bottom: -5px !important" name="orientasispiritual"
                            value="tidak" {{ $dataFormInput2->orientasispiritual == 'tidak' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Tidak</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="orientasispiritual" value="ya"
                            {{ $dataFormInput2->orientasispiritual == 'ya' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Ya</label><br>
                        <label class="labelsize1">Pelayanan Spiritual oleh:</label><br>
                        <input type="text" class="form-control" id="ya" name="oleh"
                            class="form-control @error('oleh') is-invalid @enderror"
                            value="{{ $dataFormInput2->oleh }}">
                    </div>
                </div>

                <h4>5. Urusan dan kebutuhan spiritual pasien dan keluarga seperti putus asa,<br> penderitaan, rasa
                    bersalah atau pengampunan: </h4>
                <div class="container">

                    <label class="labelsize1"> Perlu didoakan:</label><br>
                    <div class="container1">
                        <input type="radio" style="margin-bottom: -5px !important" name="perludidoakan" value="tidak"
                            {{ $dataFormInput2->perludidoakan == 'tidak' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Tidak</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="perludidoakan" value="ya"
                            {{ $dataFormInput2->perludidoakan == 'ya' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Ya</label><br>
                    </div>


                    <label class="labelsize1"> Perlu bimbingan rohani:</label><br>
                    <div class="container1">
                        <input type="radio" style="margin-bottom: -5px !important" name="perlubimbinganrohani"
                            value="tidak" {{ $dataFormInput2->perlubimbinganrohani == 'tidak' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Tidak</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="perlubimbinganrohani"
                            value="ya" {{ $dataFormInput2->perlubimbinganrohani == 'ya' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Ya</label><br>
                    </div>

                    <label class="labelsize1"> Perlu pendampingan rohani :</label><br>
                    <div class="container1">
                        <input type="radio" style="margin-bottom: -5px !important" name="perlupendampinganrohani"
                            value="tidak" {{ $dataFormInput2->perlupendampinganrohani == 'tidak' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Tidak</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="perlupendampinganrohani"
                            value="ya" {{ $dataFormInput2->perlupendampinganrohani == 'ya' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Ya</label><br>
                    </div>
                </div>

                <h4>6. Orientasi spiritual paaasien dan keluarga : </h4>
                <div class="container">

                    <label class="labelsize1"> 6.1.Apakah ada orang yang ingin dihubungi saat ini?</label><br>
                    <div class="container1">
                        <input type="radio" style="margin-bottom: -5px !important" name="orangyangdihubungi"
                            value="tidak" {{ $dataFormInput2->orangyangdihubungi == 'tidak' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Tidak</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="orangyangdihubungi" value="ya"
                            {{ $dataFormInput2->orangyangdihubungi == 'ya' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Ya</label><br>

                        <label class="labelsize1">siapa: </label><br>
                        <input type="text" class="form-control" id="ya" name="siapa"
                            class="form-control @error('siapa') is-invalid @enderror"
                            value="{{ $dataFormInput2->siapa }}"><br>

                        <label class="labelsize1"> Hubungan dengan pasien sebagai:</label><br>
                        <input type="text" class="form-control" id="ya" name="hubungansebagai"
                            class="form-control @error('hubungansebagai') is-invalid @enderror"
                            value="{{ $dataFormInput2->hubungansebagai }}"><br>

                        <label class="labelsize1">Dimana:</label><br>
                        <input type="text" class="form-control" id="ya" name="dimana"
                            class="form-control @error('dimana') is-invalid @enderror"
                            value="{{ $dataFormInput2->dimana }}"><br>

                        <label class="labelsize1">No. Telpon/HP:</label><br>
                        <input type="text" class="form-control" id="ya" name="telp"
                            class="form-control @error('telp') is-invalid @enderror"
                            value="{{ $dataFormInput2->telp }}"><br>
                    </div>

                    <p>
                        6.2.Bagaimana rencana perawatan selanjutnya?
                    </p>
                    <div class="container1">
                        <input type="radio" style="margin-bottom: -5px !important" name="rencanaperawatan"
                            value="rawatdirs" {{ $dataFormInput2->rencanaperawatan == 'rawatdirs' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Tetap Dirawat di RS</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="rencanaperawatan"
                            value="rawatdirumah"
                            {{ $dataFormInput2->rencanaperawatan == 'rawatdirumah' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Dirawat Dirumah</label><br>
                        <label class="labelsize1">Jika ya, Apakah Lingkungan rumah sudah disiapkan</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="lingkunganrumah"
                            value="tidak62a" {{ $dataFormInput2->lingkunganrumah == 'tidak62a' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Tidak</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="lingkunganrumah" value="ya62a"
                            {{ $dataFormInput2->lingkunganrumah == 'ya62a' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Ya</label><br>
                        <label class="labelsize1">Jika siap, Apakah ada yang mampu ,merawat pasien di rumah?</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="mampumerawat" value="tidak62b"
                            {{ $dataFormInput2->mampumerawat == 'tidak62b' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Tidak</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="mampumerawat" value="ya62b"
                            {{ $dataFormInput2->mampumerawat == 'ya62b' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">Ya</label><br>
                        <label class="labelsize1">jika ada, oleh siapa:</label><br>
                        <input type="text" class="form-control" id="ya" name="siapaygmerawat"
                            class="form-control @error('siapaygmerawat') is-invalid @enderror"
                            value="{{ $dataFormInput2->siapaygmerawat }}"><br>
                        <label class="labelsize1">jika tidak siap, apakah perlu difasilitasi RS (Home
                            Care)?:</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="perlufasilitas" value="ya"
                            {{ $dataFormInput2->perlufasilitas == 'ya' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">ya</label><br>
                        <input type="radio" style="margin-bottom: -5px !important" name="perlufasilitas" value="tidak"
                            {{ $dataFormInput2->perlufasilitas == 'tidak' ? 'checked' : '' }}>
                        <label class="labelsize" for="tidak">tidak</label><br>
                    </div>

                    <p>
                        6.3.Reaksi pasien atas penyakitnya
                    </p>
                    <div class="container1">

                        <label class="labelsize1">Asesmen Informasi</label><br>
                        <table>
                            <tr>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="asesmenreaksipasien[]" value="menyangkal"
                                        <?php if (strpos($dataFormInput2['asesmenreaksipasien'], 'menyangkal') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Menyangkal</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="asesmenreaksipasien[]" value="marah"
                                        <?php if (strpos($dataFormInput2['asesmenreaksipasien'], 'marah') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Marah</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="asesmenreaksipasien[]" value="sedih"
                                        <?php if (strpos($dataFormInput2['asesmenreaksipasien'], 'sedih') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Sedih/menangis</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="asesmenreaksipasien[]" value="rasabersalah"
                                        <?php if (strpos($dataFormInput2['asesmenreaksipasien'], 'rasabersalah') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Rasa Bersalah</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="asesmenreaksipasien[]" value="ketidakberdayaan"
                                        <?php if (strpos($dataFormInput2['asesmenreaksipasien'], 'ketidakberdayaan') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Ketidak Berdayaan</label>
                                </td>
                                <td>
                                    <input type="checkbox" style="margin-bottom: -6px !important"
                                        name="asesmenreaksipasien[]" value="takut"
                                        <?php if (strpos($dataFormInput2['asesmenreaksipasien'], 'takut') !== false) echo 'checked="checked"'; ?>>
                                    <label class="labelsize" for="tidak">Takut</label>
                                </td>
                            </tr>
                        </table>

                        <label class="labelsize1">Masalah keperawatan</label><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="masalahreaksipasien[]" value="anxietas"
                                    <?php if (strpos($dataFormInput2['masalahreaksipasien'], 'anxietas') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Anxietas</label>
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="masalahreaksipasien[]" value="distress"
                                    <?php if (strpos($dataFormInput2['masalahreaksipasien'], 'distress') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Distress Spiritual</label>
                            </div>
                        </div>
                    </div>

                    <p>
                        6.4.Reaksi keluarga atas penyakit pasien :
                    </p>
                    <div class="container1">
                        <label class="labelsize1">Asesmen Informasi</label><br>
                        <input type="checkbox" style="margin-bottom: -6px !important" name="asesmenreaksikeluarga[]"
                            value="marah"
                            <?php if (strpos($dataFormInput2['asesmenreaksikeluarga'], 'marah') !== false) echo 'checked="checked"'; ?>>
                        <label class="labelsize" for="tidak">Marah</label><br>

                        <input type="checkbox" style="margin-bottom: -6px !important" name="asesmenreaksikeluarga[]"
                            value="gangguantidur"
                            <?php if (strpos($dataFormInput2['asesmenreaksikeluarga'], 'gangguantidur') !== false) echo 'checked="checked"'; ?>>
                        <label class="labelsize" for="tidak">Gangguan Tidur</label><br>



                        <input type="checkbox" style="margin-bottom: -6px !important" name="asesmenreaksikeluarga[]"
                            value="ketidakmampuan"
                            <?php if (strpos($dataFormInput2['asesmenreaksikeluarga'], 'ketidakmampuan') !== false) echo 'checked="checked"'; ?>>
                        <label class="labelsize" for="tidak">Ketidakmampuan memenuhi peran yang
                            diharapkan</label><br>

                        <input type="checkbox" style="margin-bottom: -6px !important" name="asesmenreaksikeluarga[]"
                            value="rasabersalah"
                            <?php if (strpos($dataFormInput2['asesmenreaksikeluarga'], 'rasabersalah') !== false) echo 'checked="checked"'; ?>>
                        <label class="labelsize" for="tidak">Rasa Bersalah</label><br>

                        <input type="checkbox" style="margin-bottom: -6px !important" name="asesmenreaksikeluarga[]"
                            value="keluargakurangberkomunikasi"
                            <?php if (strpos($dataFormInput2['asesmenreaksikeluarga'], 'keluargakurangberkomunikasi') !== false) echo 'checked="checked"'; ?>>
                        <label class="labelsize" for="tidak">Keluarga Kurang Berkomunikasi</label><br>

                        <input type="checkbox" style="margin-bottom: -6px !important" name="asesmenreaksikeluarga[]"
                            value="keluargakurangberpartisipasi"
                            <?php if (strpos($dataFormInput2['asesmenreaksikeluarga'], 'keluargakurangberpartisipasi') !== false) echo 'checked="checked"'; ?>>
                        <label class="labelsize" for="tidak">Keluarga Kurang Berpartisipasi Membuat keputusan
                            dalam Perawatan Pasien</label><br>

                        <input type="checkbox" style="margin-bottom: -6px !important" name="asesmenreaksikeluarga[]"
                            value="letih"
                            <?php if (strpos($dataFormInput2['asesmenreaksikeluarga'], 'letih') !== false) echo 'checked="checked"'; ?>>
                        <label class="labelsize" for="tidak">Letih/lelah</label><br>

                        <input type="checkbox" style="margin-bottom: -6px !important" name="asesmenreaksikeluarga[]"
                            value="penurunankonsentrasi"
                            <?php if (strpos($dataFormInput2['asesmenreaksikeluarga'], 'penurunankonsentrasi') !== false) echo 'checked="checked"'; ?>>
                        <label class="labelsize" for="tidak">Penurunan Konsentrasi</label><br>

                        <input type="checkbox" style="margin-bottom: -6px !important" name="asesmenreaksikeluarga[]"
                            value="perubahankebiasaan"
                            <?php if (strpos($dataFormInput2['asesmenreaksikeluarga'], 'perubahankebiasaan') !== false) echo 'checked="checked"'; ?>>
                        <label class="labelsize" for="tidak">Perubahan Kebiasaan pola komunikasi</label>

                        <label class="labelsize1">Masalah keperawatan</label><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="masalahreaksikeluarga[]" value="kopingindividu"
                                    <?php if (strpos($dataFormInput2['masalahreaksikeluarga'], 'kopingindividu') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Koping Individu</label>
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="masalahreaksikeluarga[]" value="distressspiritual"
                                    <?php if (strpos($dataFormInput2['masalahreaksikeluarga'], 'distressspiritual') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Distress Spiritual</label>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- <div class="textpadding"> -->
                <h4>7. Kebutuhan dukungan atau kelonggaran pelayanan bagi pasien, keluarga dan pemberi
                    <br>pelayanan lain :
                </h4>
                <!-- </div> -->


                <div class="container1">


                    <input type="checkbox" style="margin-bottom: -6px !important" name="kebutuhandukungan[]"
                        value="Pasien perlu didampingi keluarga"
                        <?php if (strpos($dataFormInput2['kebutuhandukungan'], 'Pasien perlu didampingi keluarga') !== false) echo 'checked="checked"'; ?>>
                    <label class="labelsize" for="tidak">Pasien perlu didampingi keluarga</label><br>
                    <input type="checkbox" style="margin-bottom: -6px !important" name="kebutuhandukungan[]"
                        value="Keluarga dapat mengunjungi pasien di luar waktu"
                        <?php if (strpos($dataFormInput2['kebutuhandukungan'], 'Keluarga dapat mengunjungi pasien di luar waktu') !== false) echo 'checked="checked"'; ?>>
                    <label class="labelsize" for="tidak">Keluarga dapat mengunjungi pasien di luar waktu</label><br>
                    <input type="checkbox" style="margin-bottom: -6px !important" name="kebutuhandukungan[]"
                        value="Sahabat dapat mengunjungi pasien"
                        <?php if (strpos($dataFormInput2['kebutuhandukungan'], 'Sahabat dapat mengunjungi pasien') !== false) echo 'checked="checked"'; ?>>
                    <label class="labelsize" for="tidak">Sahabat dapat mengunjungi pasien</label><br>
                    <label class="labelsize1">Faktor Lainnya:</label><br>
                    <input type="text" style="margin-bottom: -6px !important" class="form-control" id="ya"
                        name="kebutuhandukunganlainnya"
                        class="form-control @error('kebutuhandukunganlainnya') is-invalid @enderror"
                        value="{{ $dataFormInput2->kebutuhandukunganlainnya }}">

                </div>
                <h4>8. Apakah ada kebutuhan akan alternatif atau tingkat pelayanan lain : </h4>
                <div class="container1">
                    <div class="col-sm-6">
                        <input type="checkbox" style="margin-bottom: -6px !important" name="kebutuhanalternatif[]"
                            value="Tidak"
                            <?php if (strpos($dataFormInput2['kebutuhanalternatif'], 'Tidak') !== false) echo 'checked="checked"'; ?>>
                        <label class="labelsize" for="tidak">Tidak</label>
                        <input class="form-check-input" style="margin-bottom: -6px !important" type="checkbox"
                            id="donasiorgan">
                        <label class="labelsize" for="donasiorgan">Donasi Organ :</label>
                        <input type="text" style="margin-bottom: -6px !important" class="form-control"
                            id="inputdonasiorgan" name="donasiorgan"
                            class="form-control @error('donasiorgan') is-invalid @enderror"
                            value="{{ $dataFormInput2->donasiorgan }}">
                    </div>
                </div>


                <label class="labelsize1"><strong>Faktor resiko bagi keluarga yang ditinggalkan :<strong></label><br>

                <div class="container1">

                    <label class="labelsize1">Asesmen Informasi</label><br>
                    <table>
                        <tr>
                            <td>
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="asesmenfaktorresiko[]" value="marah"
                                    <?php if (strpos($dataFormInput2['asesmenfaktorresiko'], 'marah') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Marah</label>
                            </td>
                            <td>
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="asesmenfaktorresiko[]" value="gangguantidur"
                                    <?php if (strpos($dataFormInput2['asesmenfaktorresiko'], 'gangguantidur') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Gangguan Tidur</label>
                            </td>
                            <td>
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="asesmenfaktorresiko[]" value="ketidakmampuan"
                                    <?php if (strpos($dataFormInput2['asesmenfaktorresiko'], 'ketidakmampuan') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Ketidakmampuan memenuhi peran yang
                                    diharapkan</label>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="asesmenfaktorresiko[]" value="depresi"
                                    <?php if (strpos($dataFormInput2['asesmenfaktorresiko'], 'depresi') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Depresi</label>
                            </td>
                            <td>

                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="asesmenfaktorresiko[]" value="sedih"
                                    <?php if (strpos($dataFormInput2['asesmenfaktorresiko'], 'sedih') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Sedih/menangis</label>
                            </td>
                            <td>
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="asesmenfaktorresiko[]" value="penurunankonsentrasi"
                                    <?php if (strpos($dataFormInput2['asesmenfaktorresiko'], 'penurunankonsentrasi') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Penurunan Konsentrasi</label>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="asesmenfaktorresiko[]" value="letih"
                                    <?php if (strpos($dataFormInput2['asesmenfaktorresiko'], 'letih') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Letih/lelah</label>
                            </td>
                            <td>
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="asesmenfaktorresiko[]" value="rasabersalah"
                                    <?php if (strpos($dataFormInput2['asesmenfaktorresiko'], 'rasabersalah') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Rasa Bersalah</label>
                            </td>
                            <td>
                                <input type="checkbox" style="margin-bottom: -6px !important"
                                    name="asesmenfaktorresiko[]" value="perubahankebiasaan"
                                    <?php if (strpos($dataFormInput2['asesmenfaktorresiko'], 'perubahankebiasaan') !== false) echo 'checked="checked"'; ?>>
                                <label class="labelsize" for="tidak">Perubahan Kebiasaan pola komunikasi</label>
                            </td>
                        </tr>
                    </table>


                    <label class="labelsize1">Masalah Keperawatan</label><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="checkbox" style="margin-bottom: -6px !important"
                                style="margin-bottom: -6px !important" name="masalahfaktorresiko[]"
                                value="koplingindividu"
                                <?php if (strpos($dataFormInput2['masalahfaktorresiko'], 'koplingindividu') !== false) echo 'checked="checked"'; ?>>
                            <label class="labelsize" for="tidak">Koping Individu</label>
                            <input type="checkbox" style="margin-bottom: -6px !important" name="masalahfaktorresiko[]"
                                value="distressspiritual"
                                <?php if (strpos($dataFormInput2['masalahfaktorresiko'], 'distressspiritual') !== false) echo 'checked="checked"'; ?>>
                            <label class="labelsize" for="tidak">Distress Spiritual</label>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    <!-- </div> -->

    <!-- </div>
    </div> -->
</body>

</html>