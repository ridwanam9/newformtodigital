<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_input2s', function (Blueprint $table) {


            $table->id();
            $table->string('nama')->nullable();
            $table->string('norm')->nullable();
            $table->string('tanggallahir')->nullable();
            $table->string('alamat')->nullable();

            $table->string('kegawatanpernafasan')->nullable();
            $table->string('kehilangantinusotot')->nullable();
            $table->string('nyeri')->nullable();
            $table->string('bagiannyeri')->nullable();
            $table->string('perlambatansirkulasi')->nullable();
            $table->string('faktorgejalafisik')->nullable();
            $table->string('faktorgejalafisiklainnya')->nullable();
            $table->string('manajemengejala')->nullable();
             $table->string('orientasispiritual')->nullable();
             $table->string('oleh')->nullable();
            $table->string('perludidoakan')->nullable();
            $table->string('perlubimbinganrohani')->nullable();
            $table->string('perlupendampinganrohani')->nullable();
            $table->string('orangyangdihubungi')->nullable();
            $table->string('siapa')->nullable();
            $table->string('hubungansebagai')->nullable();
            $table->string('dimana')->nullable();
            $table->string('telp')->nullable();
            $table->string('rencanaperawatan')->nullable();
            $table->string('lingkunganrumah')->nullable();
            $table->string('mampumerawat')->nullable();
            $table->string('siapaygmerawat')->nullable();
            $table->string('perlufasilitas')->nullable();
            $table->string('asesmenreaksipasien')->nullable();
            $table->string('masalahreaksipasien')->nullable();
            $table->string('asesmenreaksikeluarga')->nullable();
            $table->string('masalahreaksikeluarga')->nullable();
            $table->string('kebutuhandukungan')->nullable();
            $table->string('kebutuhandukunganlainnya')->nullable();
            $table->string('kebutuhanalternatif')->nullable();
            $table->string('kebutuhanalternatiflainnya')->nullable();
            $table->string('donasiorgan')->nullable();
            $table->string('asesmenfaktorresiko')->nullable();
            $table->string('masalahfaktorresiko')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_input2s');
    }

};
