<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transfer intra Rumah Sakit</title>

    
    <!-- <link rel="stylesheet" href="resources\css\app.css"> -->
    <style>
    .page {
        position: relative;
    }

    .verticleline {
        /* border-left: 6px solid black;
        height: 500px; */
        border-style: solid;
        margin: 10px 10px 10px 10px;
    }

    .verticleline1 {
        /* border-left: 6px solid black;
        height: 500px; */
        border-style: solid;
        margin-top: 0px;
        margin-bottom: 10px;
        margin-right: 10px;
        margin-left: 10px;
    }

    .text-right-justify {
        text-align: justify;
        direction: rtl;
    }

    @page {
  size: A4;
  margin: 0;
}

    .my-text {
        background-color: black;
        /* border-left: 6px solid black;
        height: 500px; */
        border-style: solid;
        padding: 10px;
    }

    .table1 {
        border-collapse: collapse;
    }

    .table2 {
        border-collapse: collapse;
        border: none;
    }

    .table td,
    .table th {
        border: none;

    }


    h1 {
        color: white;
        text-align: center;
        style="font-family: 'Open Sans', sans-serif;

    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: 200%;
        padding: 20px;
        box-sizing: border-box;
    }

    .table1 {
        border-collapse: collapse;
        width: 30%;

    }

    .table1 th,
    .table1 td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
        white-space: normal;
    }

    .table th {
        background-color: gray;
        color: white;
    }

    .my-table {
        margin-left: auto;
        margin-right: 0;
    }

    .text {
        text-indent: 10px;
        /* membuat teks menjorok ke kanan sejauh 20 piksel */
    }

    .garis_vertikal {
        border-left: 1px black solid;
        height: 170px;
        width: 0px;
        margin-left: auto;
    }

    .my-heading {
        font-size: 19px;
    }

    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
        background-color: #f2f2f2;
        padding: 10px;
        font-size: 14px;
    }

    @media print {
        footer {
            position: fixed;
            bottom: 0;
        }
    }
    $dompdf->setPaper('A4', 'portrait');
    </style>
</head>
<body>
    <div class="verticleline">
        <div style="display: flex; align-items: center;">
            <div style="text-align: right;">
                <table class="my-table">
                    <tr>
                        <img src="assets/img/pku.png" alt="Gambar ilustrasi" width="300" height="150"
                            style="margin-right: 250px;">
                        <td>
                            <span>Nama : {{ $dataFormInput->nama }}</span><br>
                            <span>No. MR : {{ $dataFormInput->norm }}</span><br>
                            <span>Tanggal Lahir : {{ $dataFormInput->tanggallahir }}</span><br>
                            <span>Alamat : {{ $dataFormInput->alamat }}</span><br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="verticleline1">
        <div class="my-text">
            <h1 class="my-heading">TRANSFER INTRA RUMAH SAKIT</h1>
        </div>
        <div class="container">
            <label><strong>Data Transfer Intra Rumah Sakit Pku Gamping</strong></label>
        </div>
        <div class="text">
            <style>
            table {
                margin-left: 30px;
                margin-right: 30px;
            }
            td {
                padding: 5px;
            }
            </style>
            <table class="table2">

                <tr>
                    <td>DPJP</td>
                    <td>:</td>
                    <td>{{ $dataFormInput->dpjp }}</td>
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td>{{ $dataFormInput->tanggalmasuk }}</td>
                </tr>
                <tr>
                    <td>Dokter Kosulan</td>
                    <td>:</td>
                    <td>{{ $dataFormInput->dokterkonsulan }}</td>
                    <td>Ruang</td>
                    <td>:</td>
                    <td>{{ $dataFormInput->ruang }}</td>
                </tr>
                <tr>
                    <td>Diagnosa</td>
                    <td>:</td>
                    <td>{{ $dataFormInput->diagnosa }}</td>
                    <td>Tanggal Pindah</td>
                    <td>:</td>
                    <td>{{ $dataFormInput->tanggalpindah }}</td>
                </tr>
                <tr>
                    <td>Riwayat Alergi</td>
                    <td>:</td>
                    <td>{{ $dataFormInput->riwayatalergi }}</td>
                    <td>Jam Pindah</td>
                    <td>:</td>
                    <td>{{ $dataFormInput->jampindah }}</td>
                </tr>
                <tr>
                    <td>Pindah Ke Ruang</td>
                    <td>:</td>
                    <td>{{ $dataFormInput->pindahkeruang }}</td>
                    <td>Alasan Pindah Ruangan</td>
                    <td>:</td>
                    <td>{{ $dataFormInput->alasanpindahruangan }}</td>
                </tr>

            </table>
        </div>


        <div class="container">
            <label><strong>I. Kondisi Pasien</strong></label>
            <div class="text">
                <table class="table1">
                    <tr>
                        <th></th>
                        <th>Sebelum Transfer</th>
                        <th>Sesudah Transfer</th>
                    </tr>
                    <tr>
                        <td>Keluhan </td>
                        <td>{{ $dataFormInput->keluhansebelum }} </td>
                        <td>{{ $dataFormInput->keluhansesudah }} </td>
                    </tr>
                    <tr>
                        <td>Keadaan umum</td>
                        <td>{{ $dataFormInput->keadaanumum}} </td>
                        <td>{{ $dataFormInput->keadaanumum1}} </td>
                    </tr>
                    <tr>
                        <td>Kesadaran</td>>
                        <td>Eye:{{ $dataFormInput->kesadaranesebelum}},Verbal:{{ $dataFormInput->kesadaranvsebelum}},Motorik:{{ $dataFormInput->kesadaranmsebelum}}
                            Kesadaran: {{ $dataFormInput->kesadaransebelum}}
                        </td>
                        <td>Eye:{{ $dataFormInput->kesadaranesesudah}},Verbal:{{ $dataFormInput->kesadaranvsesudah}},Motorik:{{ $dataFormInput->kesadaranmsesudah}}
                            Kesadaran: {{ $dataFormInput->kesadaransesudah}}
                        </td>
                    </tr>
                    <tr>
                        <td>Vital Sign</td>
                        <td> {{ $dataFormInput->tdsebelum}}, {{ $dataFormInput->nsebelum}},
                            {{ $dataFormInput->rsebelum}},  {{ $dataFormInput->sbsebelum}}
                        </td>
                        <td> {{ $dataFormInput->tdsesudah}}, {{ $dataFormInput->nsesudah}},
                            {{ $dataFormInput->rsesudah}}, {{ $dataFormInput->sbsesudah}}
                        </td>
                    </tr>
                    <tr>
                        <td>Skala Nyeri</td>
                        <td>{{ $dataFormInput->skalanyerisebelum}}, tanggal:
                            {{ $dataFormInput->lokasisebelum}}</td>
                        <td>{{ $dataFormInput->skalanyerisesudah}}, tanggal:
                            {{ $dataFormInput->lokasisesudah}}</td>
                    </tr>
                    <tr>
                        <td>Resiko Jatuh</td>
                        <td>{{ $dataFormInput->resikojatuhsebelum}}</td>
                        <td>{{ $dataFormInput->resikojatuhsesudah}}</td>
                    </tr>
                </table>
                <br>

                <label><strong>II. Pemberian Terapi:</strong></label>

                <p>
                    Infus : {{ $dataFormInput->infussebelum}} tanggal :
                    {{ $dataFormInput->tanggalpemasangansebelum}}
                <p>
                    obat oral/injeksi yang diberikan : {{ $dataFormInput->injeksiyangdiberikan}}
                <p><br></br><br>

                    <label><strong>III.Tindakan Medis Yang Dilakukan:</strong></label>
                <p>
                    Tindakan medis yang dilakukan : {{ $dataFormInput->tindakanmedisyangdilakukan}}
                <p><br>
                    <label><strong>IV.Informasi Khusus:</strong></label>
                <p>
                    informasi khusus : {{ $dataFormInput->informasikhusus}}
                <p><br>
                    <label><strong>V.Lain-Lain:</strong></label>
                    </table>
                <div class="text">
                    <table class="table1">
                        <tr>
                            <th>Check List</th>
                            <th>Ya</th>
                            <th>Tidak</th>
                        </tr>
                        <tr>
                            <td>Catatan Pemberian Obat</td>
                            <td>
                                <label>
                                    <input type="radio" name="pemberianobat" value="ya"
                                        {{ $dataFormInput->pemberianobat == 'ya' ? 'checked' : '' }}>
                                    Ya
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="pemberianobat" value="tidak"
                                        {{ $dataFormInput->pemberianobat == 'tidak' ? 'checked' : '' }}>
                                    Tidak
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Hasil Laboraturium</td>
                            <td>
                                <label>
                                    <input type="radio" name="hasillabo" value="ya"
                                        {{ $dataFormInput->hasillabo == 'ya' ? 'checked' : '' }}>
                                    Ya
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="hasillabo" value="tidak"
                                        {{ $dataFormInput->hasillabo == 'tidak' ? 'checked' : '' }}>
                                    Tidak
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Hasil Radiologi</td>
                            <td>
                                <label>
                                    <input type="radio" name="hasilradio" value="ya"
                                        {{ $dataFormInput->hasilradio == 'ya' ? 'checked' : '' }}>
                                    Ya
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="hasilradio" value="tidak"
                                        {{ $dataFormInput->hasilradio == 'tidak' ? 'checked' : '' }}>
                                    Tidak
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Surat Persetujuan Tindakan</td>
                            <td>
                                <label>
                                    <input type="radio" name="persetujuan" value="ya"
                                        {{ $dataFormInput->persetujuan == 'ya' ? 'checked' : '' }}>
                                    Ya
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="persetujuan" value="tidak"
                                        {{ $dataFormInput->persetujuan == 'tidak' ? 'checked' : '' }}>
                                    Tidak
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>