<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;
use App\Models\FormInput;
use Brian2694\Toastr\Facades\Toastr;

class FormController extends Controller
{
    /** form index */
    public function formIndex()
    {
        return view('form.forminput');
    }
    public function Search()
    {
        if($request->has('cari')){
            $dataFormInput = \App\Models\formInput::where('nama', 'LIKE', '%'. $request->cari .'%')->get();
        }else{
            $dataFormInput =\App\Models\formInput::all();
        }
        return view('form.forminput');
    }

    /** save record */
    public function formSaveRecord(Request $request)
{
    $request->validate([
        // 'nama' => 'required|string|max:255',
        // 'norm' => 'required|string|max:255',
        //     'tanggallahir' => 'required|string|max:255',
        //     'alamat' => 'required|string|max:255',
        //     'dpjp' => 'required|string|max:255',
        //     'dokterkonsulan' => 'required|string|max:255',
        //     'diagnosa' => 'required|string|max:255',
        //     'riwayatalergi' => 'required|string|max:255',
        //     'alasanpindahruangan' => 'required|string|max:255',
        //     'tanggalmasuk' => 'required|string|max:255',
        //     'jampindah' => 'required|string|max:255',
        //     'pindahkeruang' => 'required|string|max:255',
        //     'keluhansebelum' => 'required|string|max:255',
        //     'keluhansesudah' => 'required|string|max:255',
        //     'keadaanumum'     => 'required|string|max:255',
        //     'keadaanumum1'     => 'required|string|max:255',
        //     'kesadaranesebelum'   => 'required|string|max:255',
        //     'kesadaranesesudah'   => 'required|string|max:255',
        //     'kesadaranvsebelum'   => 'required|string|max:255',
        //     'kesadaranvsesudah'   => 'required|string|max:255',
        //     'kesadaranmsebelum'   => 'required|string|max:255',
        //     'kesadaranmsesudah'   => 'required|string|max:255',
        //     'kesadaransebelum'   => 'required|string|max:255',
        //     'kesadaransesudah'   => 'required|string|max:255',
        //     'tdsebelum'  => 'required|string|max:255',
        //     'tdsesudah'  => 'required|string|max:255',
        //     'nsebelum'  => 'required|string|max:255',
        //     'nsesudah'  => 'required|string|max:255',
        //     'rsebelum'  => 'required|string|max:255',
        //     'rsesudah'  => 'required|string|max:255',
        //     'sbsebelum'  => 'required|string|max:255',
        //     'sbsesudah'  => 'required|string|max:255',
        //     'skalanyerisebelum'  => 'required|string|max:255',
        //     'skalanyerisesudah'  => 'required|string|max:255',
        //     'lokasisebelum'  => 'required|string|max:255',
        //     'lokasisesudah'  => 'required|string|max:255',
        //     'resikojatuhsebelum'  => 'required|string|max:255',
        //     'resikojatuhsesudah'  => 'required|string|max:255',
        //     'infussebelum'  => 'required|string|max:255',
        //     'tanggalpemasangansebelum'  => 'required|string|max:255',
        //     'infussesudah'  => 'required|string|max:255',
        //     'tanggalpemasangansesudah'  => 'required|string|max:255',
        //     'dcsebelum'  => 'required|string|max:255',
        //     'dcsesudah'  => 'required|string|max:255',
        //     'tanggalpemasangandcsebelum'  => 'required|string|max:255',
        //     'tanggalpemasangandcsesudah'  => 'required|string|max:255',
        //     'injeksiyangdiberikan'  => 'required|string|max:255',
        //     'tindakanmedisyangdilakukan'  => 'required|string|max:255',
        //     'informasikhusus'  => 'required|string|max:255',
        //     'pemberianobat'  => 'required|string|max:255',
        //     'hasillabo'  => 'required|string|max:255',
        //     'hasilradio'  => 'required|string|max:255',
        //     'persetujuan'  => 'required|string|max:255',
        //     'ruang'  => 'required|string|max:255',
        //     'tanggalpindah'  => 'required|string|max:255',
    ]);

    DB::beginTransaction();
    try {
        $saveRecord = new FormInput;
        $saveRecord->nama = $request->nama;
        $saveRecord->norm = $request->norm;
            $saveRecord->tanggallahir = $request->tanggallahir;
            $saveRecord->alamat = $request->alamat;
            $saveRecord->dpjp = $request->dpjp;
            $saveRecord->dokterkonsulan = $request->dokterkonsulan;
            $saveRecord->diagnosa = $request->diagnosa;
            $saveRecord->riwayatalergi = $request->riwayatalergi;
            $saveRecord->alasanpindahruangan = $request->alasanpindahruangan;
            $saveRecord->tanggalmasuk = $request->tanggalmasuk;
            $saveRecord->jampindah = $request->jampindah;
            $saveRecord->pindahkeruang = $request->pindahkeruang;
            $saveRecord->keluhansebelum = $request->keluhansebelum;
            $saveRecord->keluhansesudah = $request->keluhansesudah;
            $saveRecord->keadaanumum= $request->keadaanumum;
            $saveRecord->keadaanumum1= $request->keadaanumum1;
            $saveRecord->kesadaranesebelum = $request->kesadaranesebelum;
            $saveRecord->kesadaranesesudah = $request->kesadaranesesudah;
            $saveRecord->kesadaranvsebelum = $request->kesadaranvsebelum;
            $saveRecord->kesadaranvsesudah = $request->kesadaranvsesudah;
            $saveRecord->kesadaranmsebelum = $request->kesadaranmsebelum;
            $saveRecord->kesadaranmsesudah = $request->kesadaranmsesudah;
            $saveRecord->kesadaransebelum = $request->kesadaransebelum;
            $saveRecord->kesadaransesudah = $request->kesadaransesudah;
            $saveRecord->tdsebelum = $request->tdsebelum;
            $saveRecord->tdsesudah = $request->tdsesudah;
            $saveRecord->nsebelum = $request->nsebelum;
            $saveRecord->nsesudah = $request->nsesudah;
            $saveRecord->rsebelum = $request->rsebelum;
            $saveRecord->rsesudah = $request->rsesudah;
            $saveRecord->sbsebelum = $request->sbsebelum;
            $saveRecord->sbsesudah = $request->sbsesudah;
            $saveRecord->skalanyerisebelum = $request->skalanyerisebelum;
            $saveRecord->skalanyerisesudah = $request->skalanyerisesudah;
            $saveRecord->lokasisebelum = $request->lokasisebelum;
            $saveRecord->lokasisesudah = $request->lokasisesudah;
            $saveRecord->resikojatuhsebelum = $request->resikojatuhsebelum;
            $saveRecord->resikojatuhsesudah = $request->resikojatuhsesudah;
            $saveRecord->infussebelum = $request->infussebelum;
            $saveRecord->tanggalpemasangansebelum = $request->tanggalpemasangansebelum;
            $saveRecord->dcsebelum = $request->dcsebelum;
            $saveRecord->tanggalpemasangandcsebelum = $request->tanggalpemasangandcsebelum;
            $saveRecord->injeksiyangdiberikan = $request->injeksiyangdiberikan;
            $saveRecord->tindakanmedisyangdilakukan = $request->tindakanmedisyangdilakukan;
            $saveRecord->informasikhusus = $request->informasikhusus;
            $saveRecord->pemberianobat = $request->pemberianobat;
            $saveRecord->hasillabo = $request->hasillabo;
            $saveRecord->hasilradio = $request->hasilradio;
            $saveRecord->persetujuan = $request->persetujuan;
            $saveRecord->ruang = $request->ruang;
            $saveRecord->tanggalpindah = $request->tanggalpindah;

        $saveRecord->save();
        DB::commit();
        Toastr::success('Data has been saved successfully :)', 'Success');
        return redirect()->back();
    } catch (\Exception $e) {
        DB::rollback();
        Toastr::error('Data save fail :)', 'Error');
        return redirect()->back();
    }
}

    /** page form view */
    public function formView()
    {
        $dataFormInput = FormInput::all();
        return view('pageview.form-input-table', compact('dataFormInput'));
    }

    /** page edit form input */
    public function formInputEdit($id)
    {
        $formInputView = FormInput::where('id', $id)->first();
        return view('pageview.form-input-edit', compact('formInputView'));
    }

    /** update record form input */
    public function formUpdateRecord(Request $request)
    {
        $request->validate([
            // 'nama' => 'required|string|max:255',
            // 'norm' => 'required|string|max:255',
            // 'tanggallahir' => 'required|string|max:255',
            // 'alamat' => 'required|string|max:255',
            // 'dpjp' => 'required|string|max:255',
            // 'dokterkonsulan' => 'required|string|max:255',
            // 'diagnosa' => 'required|string|max:255',
            // 'riwayatalergi' => 'required|string|max:255',
            // 'alasanpindahruangan' => 'required|string|max:255',
            // 'tanggalmasuk' => 'required|string|max:255',
            // 'jampindah' => 'required|string|max:255',
            // 'pindahkeruang' => 'required|string|max:255',
            // 'keluhansebelum' => 'required|string|max:255',
            // 'keluhansesudah' => 'required|string|max:255',
            // 'keadaanumum'     => 'required|string|max:255',
            // 'keadaanumum1'     => 'required|string|max:255',
            // 'kesadaranesebelum'   => 'required|string|max:255',
            // 'kesadaranesesudah'   => 'required|string|max:255',
            // 'kesadaranvsebelum'   => 'required|string|max:255',
            // 'kesadaranvsesudah'   => 'required|string|max:255',
            // 'kesadaranmsebelum'   => 'required|string|max:255',
            // 'kesadaranmsesudah'   => 'required|string|max:255',
            // 'kesadaransebelum'   => 'required|string|max:255',
            // 'kesadaransesudah'   => 'required|string|max:255',
            // 'tdsebelum'  => 'required|string|max:255',
            // 'tdsesudah'  => 'required|string|max:255',
            // 'nsebelum'  => 'required|string|max:255',
            // 'nsesudah'  => 'required|string|max:255',
            // 'rsebelum'  => 'required|string|max:255',
            // 'rsesudah'  => 'required|string|max:255',
            // 'sbsebelum'  => 'required|string|max:255',
            // 'sbsesudah'  => 'required|string|max:255',
            // 'skalanyerisebelum'  => 'required|string|max:255',
            // 'skalanyerisesudah'  => 'required|string|max:255',
            // 'lokasisebelum'  => 'required|string|max:255',
            // 'lokasisesudah'  => 'required|string|max:255',
            // 'resikojatuhsebelum'  => 'required|string|max:255',
            // 'resikojatuhsesudah'  => 'required|string|max:255',
            // 'infussebelum'  => 'required|string|max:255',
            // 'tanggalpemasangansebelum'  => 'required|string|max:255',
            // 'infussesudah'  => 'required|string|max:255',
            // 'tanggalpemasangansesudah'  => 'required|string|max:255',
            // 'dcsebelum'  => 'required|string|max:255',
            // 'dcsesudah'  => 'required|string|max:255',
            // 'tanggalpemasangandcsebelum'  => 'required|string|max:255',
            // 'tanggalpemasangandcsesudah'  => 'required|string|max:255',
            // 'injeksiyangdiberikan'  => 'required|string|max:255',
            // 'tindakanmedisyangdilakukan'  => 'required|string|max:255',
            // 'informasikhusus'  => 'required|string|max:255',
            // 'pemberianobat'  => 'required|string|max:255',
            // 'hasillabo'  => 'required|string|max:255',
            // 'hasilradio'  => 'required|string|max:255',
            // 'persetujuan'  => 'required|string|max:255',
            // 'ruang'  => 'required|string|max:255',
            // 'tanggalpindah'  => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {

            $updateRecord = [
                'nama'      => $request->nama,
                'norm'   => $request->norm,
                'tanggallahir'     => $request->tanggallahir,
                'alamat'     => $request->alamat,
                'dpjp'   => $request->dpjp,
                'dokterkonsulan'      => $request->dokterkonsulan,
                'diagnosa'     => $request->diagnosa,
                'riwayatalergi'     => $request->riwayatalergi,
                'alasanpindahruangan'     => $request->alasanpindahruangan,
                'tanggalmasuk'     => $request->tanggalmasuk,
                'jampindah'     => $request->jampindah,
                'pindahkeruang'     => $request->pindahkeruang,
                'keluhansebelum'     => $request->keluhansebelum,
                'keluhansesudah'     => $request->keluhansesudah,
                'keadaanumum'     => $request->keadaanumum,
                'keadaanumum1'     => $request->keadaanumum1,
                'kesadaranesebelum'  => $request->kesadaranesebelum,
                'kesadaranesesudah'  => $request->kesadaranesesudah,
                'kesadaranvsebelum' => $request->kesadaranvsebelum,
                'kesadaranvsesudah' => $request->kesadaranvsesudah,
                'kesadaranmsebelum' => $request->kesadaranmsebelum,
                'kesadaranmsesudah' => $request->kesadaranmsesudah,
                'kesadaransebelum'  => $request->kesadaransebelum,
                'kesadaransesudah'  => $request->kesadaransesudah,
                'tdsebelum'  => $request->tdsebelum,
                'tdsesudah'  => $request->tdsesudah,
                'nsebelum'  => $request->nsebelum,
                'nsesudah'  => $request->nsesudah,
                'rsebelum'  => $request->rsebelum,
                'rsesudah'  => $request->rsesudah,
                'sbsebelum'  => $request->sbsebelum,
                'sbsesudah'  => $request->sbsesudah,
                'skalanyerisebelum'  => $request->skalanyerisebelum,
                'skalanyerisesudah'  => $request->skalanyerisesudah,
                'lokasisebelum' => $request->lokasisebelum,
                'lokasisesudah' => $request->lokasisesudah,
                'resikojatuhsebelum' => $request->resikojatuhsebelum,
                'resikojatuhsesudah' => $request->resikojatuhsesudah,
                'infussebelum' => $request->infussebelum,
                'tanggalpemasangansebelum' => $request->tanggalpemasangansebelum,
                'dcsebelum'  => $request->dcsebelum,
                'tanggalpemasangandcsebelum'  => $request->tanggalpemasangandcsebelum,
                'injeksiyangdiberikan'  => $request->injeksiyangdiberikan,
                'tindakanmedisyangdilakukan'  => $request->tindakanmedisyangdilakukan,
                'informasikhusus'  => $request->informasikhusus,
                'pemberianobat'  => $request->pemberianobat,
                'hasillabo'  => $request->hasillabo,
                'hasilradio'  => $request->hasilradio,
                'persetujuan'  => $request->persetujuan,
                'ruang'  => $request->ruang,
                'tanggalpindah'  => $request->tanggalpindah,
            ];


            FormInput::where('id',$request->id)->update($updateRecord);

            DB::commit();
            Toastr::success('Berhasil update data :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Data update fail :)','Error');
            return redirect()->back();
        }
    }

    /** delete record */
    public function formDelete(Request $request)
    {
        try {
            FormInput::destroy($request->id);
            Toastr::success('Data has been deleted successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Data delete fail :)','Error');
            return redirect()->back();
        }
    }
}
