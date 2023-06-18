<?php

namespace App\Http\Controllers;
// use DB;
use Illuminate\Support\Facades\DB;
use App\Models\FormInput2;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\JsonResponse;

class Form2Controller extends Controller
{


    public function formIndex()
    {
        return view('form.forminput2');
    }

    //fungsi search data
    public function Search(Request $request)
    {
        if($request->has('cari')){
            $dataFormInput2 = \App\Models\FormInput2::where('nama', 'LIKE', '%'. $request->cari .'%')->get();
        }else{
            $dataFormInput2 =\App\Models\FormInput2::all();
        }
        return view('form.forminput2');
    }

    /** save record */
    public function formSaveRecord(Request $request)
    {

       $request->validate([
            'nama' => 'required|string|max:255',
            'norm' => 'required|string|max:255',
            'tanggallahir' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);



        DB::beginTransaction();
        try {

            $saveRecord = new FormInput2();
            $saveRecord->nama   = $request->nama;
            $saveRecord->tanggallahir      = $request->tanggallahir;
            $saveRecord->alamat     = $request->alamat;
            $saveRecord->norm = $request->norm;
            $saveRecord->kegawatanpernafasan = json_encode($request->kegawatanpernafasan);
            // $saveRecord->kegawatanpernafasan = $request->kegawatanpernafasan;
            $saveRecord->kehilangantinusotot = $request->kehilangantinusotot;
            $saveRecord->perlambatansirkulasi = json_encode($request->perlambatansirkulasi);
            $saveRecord->nyeri = $request->nyeri;
            $saveRecord->bagiannyeri = $request->bagiannyeri;
            $saveRecord->faktorgejalafisik = json_encode($request->faktorgejalafisik);
            $saveRecord->faktorgejalafisiklainnya = $request->faktorgejalafisiklainnya;
            $saveRecord->orientasispiritual = $request->orientasispiritual;
            $saveRecord->manajemengejala = json_encode($request->manajemengejala);
            $saveRecord->oleh = $request->oleh;
            $saveRecord->perludidoakan = $request->perludidoakan;
            $saveRecord->perlubimbinganrohani = $request->perlubimbinganrohani;
            $saveRecord->perlupendampinganrohani = $request->perlupendampinganrohani;
            $saveRecord->orangyangdihubungi = $request->orangyangdihubungi;
            $saveRecord->siapa = $request->siapa;
            $saveRecord->hubungansebagai = $request->hubungansebagai;
            $saveRecord->dimana = $request->dimana;
            $saveRecord->telp = $request->telp;
            $saveRecord->rencanaperawatan = $request->rencanaperawatan;
            $saveRecord->siapaygmerawat = $request->siapaygmerawat;
            $saveRecord->lingkunganrumah = $request->lingkunganrumah;
            $saveRecord->mampumerawat = $request->mampumerawat;
            $saveRecord->perlufasilitas = $request->perlufasilitas;
            $saveRecord->asesmenreaksipasien = json_encode($request->asesmenreaksipasien);
            $saveRecord->masalahreaksipasien = json_encode($request->masalahreaksipasien);
            $saveRecord->asesmenreaksikeluarga = json_encode($request->asesmenreaksikeluarga);
            $saveRecord->masalahreaksikeluarga = json_encode($request->masalahreaksikeluarga);
            $saveRecord->kebutuhandukungan = json_encode($request->kebutuhandukungan);
            $saveRecord->kebutuhandukunganlainnya = $request->kebutuhandukunganlainnya;
            $saveRecord->kebutuhanalternatif = json_encode($request->kebutuhanalternatif);
            $saveRecord->donasiorgan = $request->donasiorgan;
            $saveRecord->kebutuhanalternatiflainnya = $request->kebutuhanalternatiflainnya;
            $saveRecord->asesmenfaktorresiko = json_encode($request->asesmenfaktorresiko);
            $saveRecord->masalahfaktorresiko = json_encode($request->masalahfaktorresiko);

            $saveRecord->save();
            DB::commit();
            Toastr::success('Data has been saved successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Data save fail :)','Error');
            return redirect()->back();
        }

    }


        /** page form view */
    public function formView(Request $request)
    {

        // $kegawatan = json_decode($request->kegawatanpernafasan);

        $dataFormInput2 = FormInput2::all();
        return view('pageview.form-input2-table',compact('dataFormInput2'));
    }

     /** page edit form input */
public function formInputEdit( $id)
{




    $formInputView2 = FormInput2::where('id', $id)->first();

    return view('pageview.form-input2-edit', compact('formInputView2'));


}

    /** save record */
    public function formUpdateRecord(Request $request)
    {


        $request->validate([
            'nama' => 'required|string|max:255',
            'norm' => 'required|string|max:255',
            'tanggallahir' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            //'kegawatanpernafasan' => 'required|string|max:255',
            //  'kehilangantinusotot' => 'required|string|max:255',
            //  'nyeri' => 'required|string|max:255',
            //  'perlambatansirkulasi' => 'required|string|max:255',
            // 'faktorgejalafisik' => 'required|string|max:255',
            // 'manajemengejala' => 'required|string|max:255',
            // 'perludidoakan' => 'required|string|max:255',
            // 'perlubimbinganrohani' => 'required|string|max:255',
            // 'perlupendampinganrohani' => 'required|string|max:255',
            // 'statuspsikologi61' => 'required|string|max:255',
            // 'statuspsikologi62' => 'required|string|max:255',
            // 'statuspsikologi62a' => 'required|string|max:255',
            // 'statuspsikologi62b' => 'required|string|max:255',
            // 'statuspsikologi62c' => 'required|string|max:255',
            // 'statuspsikologi63a' => 'required|string|max:255',
            // 'statuspsikologi63b' => 'required|string|max:255',
            // 'statuspsikologi63b' => 'required|string|max:255',
            // 'statuspsikologi64a' => 'required|string|max:255',
            // 'statuspsikologi64b' => 'required|string|max:255',
            // 'kebutuhandukungan' => 'required|string|max:255',
            // 'kebutuhanalternatif' => 'required|string|max:255',
            // 'faktorresiko_a' => 'required|string|max:255',
            // 'faktorresiko_b' => 'required|string|max:255',

        ]);

        DB::beginTransaction();
        try {

            // $checkbox = Checkbox::findOrFail($id);
            // $checkbox->is_checked = request('is_checked') ? true : false;
            // $checkbox->save();
            // return redirect()->back();


            $updateRecord = [
            'nama'      => $request->nama,
            'norm'   => $request->norm,
            'tanggallahir'     => $request->tanggallahir,
            //'kegawatanpernafasan'   =>$request->has('kegawatanpernafasan'),
            'alamat'     => $request->alamat,
            // 'kegawatanpernafasan'   => json_encode($request->kegawatanpernafasan),
            'kegawatanpernafasan'   => $request->kegawatanpernafasan,
            'kehilangantinusotot' => json_encode($request->kehilangantinusotot),
            'perlambatansirkulasi' => json_encode($request->perlambatansirkulasi),
            'nyeri' => $request->nyeri,
            'bagiannyeri' => $request->bagiannyeri,
            'faktorgejalafisik' => json_encode($request->faktorgejalafisik),
            'faktorgejalafisiklainnya' => $request->faktorgejalafisiklainnya,
            'orientasispiritual' => $request->orientasispiritual,
            'manajemengejala' => json_encode($request->manajemengejala),
            'oleh' => $request->oleh,
            'perludidoakan' => $request->perludidoakan,
            'perlubimbinganrohani' => $request->perlubimbinganrohani,
            'perlupendampinganrohani' => $request->perlupendampinganrohani,
            'orangyangdihubungi' => $request->orangyangdihubungi,
            'siapa' => $request->siapa,
            'hubungansebagai' => $request->hubungansebagai,
            'dimana' => $request->dimana,
            'telp' => $request->telp,
            'rencanaperawatan' => $request->rencanaperawatan,
            'siapaygmerawat' => $request->siapaygmerawat,
            'lingkunganrumah' => $request->lingkunganrumah,
            'mampumerawat' => $request->mampumerawat,
            'perlufasilitas' => $request->perlufasilitas,
            'asesmenreaksipasien' => json_encode($request->asesmenreaksipasien),
            'masalahreaksipasien' => json_encode($request->masalahreaksipasien),
            'asesmenreaksikeluarga' => json_encode($request->asesmenreaksikeluarga),
            'masalahreaksikeluarga' => json_encode($request->masalahreaksikeluarga),
            'kebutuhandukungan' => json_encode($request->kebutuhandukungan),
            'kebutuhandukunganlainnya' => $request->kebutuhandukunganlainnya,
            'kebutuhanalternatif' => json_encode($request->kebutuhanalternatif),
            'donasiorgan' => $request->donasiorgan,
            'kebutuhanalternatiflainnya' => $request->kebutuhanalternatiflainnya,
            'asesmenfaktorresiko' => json_encode($request->asesmenfaktorresiko),
            'masalahfaktorresiko' => json_encode($request->masalahfaktorresiko),
            ];

            FormInput2::where('id',$request->id)->update($updateRecord);
            DB::commit();
            Toastr::success('Berhasil Update Data :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Gagal Update Data :)','Error');
            return redirect()->back();
        }
    }





    /** delete record */
    public function formDelete(Request $request)
    {
        try {
            FormInput2::destroy($request->id);
            Toastr::success('Data has been deleted successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Data delete fail :)','Error');
            return redirect()->back();
        }
    }
};


