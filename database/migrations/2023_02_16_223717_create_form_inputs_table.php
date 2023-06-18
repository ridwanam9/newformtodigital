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
    
Schema::create('form_inputs', function (Blueprint $table) {
$table->id();
$table->string('nama')->nullable();
$table->string('norm')->nullable();
$table->string('tanggallahir')->nullable();
$table->string('alamat')->nullable();
$table->string('dpjp')->nullable();
$table->string('dokterkonsulan')->nullable();
$table->string('diagnosa')->nullable();
$table->string('riwayatalergi')->nullable();
$table->string('alasanpindahruangan')->nullable();
$table->string('tanggalmasuk')->nullable();
$table->string('jampindah')->nullable();
$table->string('pindahkeruang')->nullable();
$table->string('keluhansebelum')->nullable();
$table->string('keluhansesudah')->nullable();
$table->string('keadaanumum')->nullable();
$table->string('keadaanumum1')->nullable();
$table->string('kesadaranesebelum')->nullable();
$table->string('kesadaranesesudah')->nullable();
$table->string('kesadaranvsebelum')->nullable();
$table->string('kesadaranvsesudah')->nullable();
$table->string('kesadaranmsebelum')->nullable();
$table->string('kesadaranmsesudah')->nullable();
$table->string('kesadaransebelum')->nullable();
$table->string('kesadaransesudah')->nullable();
$table->string('tdsebelum')->nullable();
$table->string('nsebelum')->nullable();
$table->string('rsebelum')->nullable();
$table->string('sbsebelum')->nullable();
$table->string('tdsesudah')->nullable();
$table->string('nsesudah')->nullable();
$table->string('rsesudah')->nullable();
$table->string('sbsesudah')->nullable();
$table->string('skalanyerisebelum')->nullable();
$table->string('skalanyerisesudah')->nullable();
$table->string('lokasisebelum')->nullable();
$table->string('lokasisesudah')->nullable();
$table->string('resikojatuhsebelum')->nullable();
$table->string('resikojatuhsesudah')->nullable();
$table->string('infussebelum')->nullable();
$table->string('tanggalpemasangansebelum')->nullable();
$table->string('infussesudah')->nullable();
$table->string('tanggalpemasangansesudah')->nullable();
$table->string('dcsebelum')->nullable();
$table->string('dcsesudah')->nullable();
$table->string('tanggalpemasangandcsebelum')->nullable();
$table->string('tanggalpemasangandcsesudah')->nullable();
$table->string('injeksiyangdiberikan')->nullable();
$table->string('tindakanmedisyangdilakukan')->nullable();
$table->string('informasikhusus')->nullable();
$table->string('pemberianobat')->nullable();
$table->string('hasillabo')->nullable();
$table->string('hasilradio')->nullable();
$table->string('persetujuan')->nullable();
$table->string('ruang')->nullable();
$table->string('tanggalpindah')->nullable();
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
        Schema::dropIfExists('form_inputs');
    }
};