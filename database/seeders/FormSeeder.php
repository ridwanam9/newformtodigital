<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('form_inputs')->insert([
    			'nama' => $faker->name,
                'norm' => $faker->numberBetween(10000, 99999),
                'tanggallahir' => $faker->date('Y-m-d', '-25 years'),
                'dpjp' => $faker->name('male', 'Dr. ') . $faker->lastName,
                'dokterkonsulan' => $faker->name('male', 'Dr. ') . $faker->lastName,
                'diagnosa' => 'Pneumonia',
                'riwayatalergi' => 'None',
                'alasanpindahruangan' => 'To monitor condition',
                'tanggalmasuk' => date('Y-m-d'),
                'jampindah' => $faker->time('H:i'),
                'pindahkeruang' => 'ICU',
                'keluhansebelum' => 'Fever, cough, shortness of breath',
                'kesadaranesebelum' => 'Conscious',
                'kesadaranesesudah' => 'Conscious',
                'kesadaranvsebelum' => 'Normal',
                'kesadaranvsesudah' => 'Normal',
                'kesadaranmsebelum' => 'Oriented',
                'kesadaranmsesudah' => 'Oriented',
                'kesadaransebelum' => '15',
                'tdsebelum' => '120/80',
                'tdsesudah' => '110/70',
                'nsebelum' => '80',
                'nsesudah' => '70',
                'rsebelum' => '20',
                'rsesudah' => '18',
                'sbsebelum' => '95%',
                'sbsesudah' => '98%',
                'skalanyerisebelum' => '6',
                'skalanyerisesudah' => '8',
                'lokasisebelum' => 'Right arm',
                'lokasisesudah' => 'Left arm',
                'resikojatuhsebelum' => 'Low',
                'resikojatuhsesudah' => 'Low',
                'infussebelum' => 'Normal saline',
                'tanggalpemasangansebelum' => date('Y-m-d', strtotime('-1 day')),
                'infussesudah' => 'Dextrose 5%',
                'tanggalpemasangansesudah' => date('Y-m-d'),
                'dcsebelum' => 'Yes',
                'dcsesudah' => 'No',
                'tanggalpemasangandcsebelum' => date('Y-m-d', strtotime('-1 day')),
                'tanggalpemasangandcsesudah' => '',
                'injeksiyangdiberikan' => 'Antibiotics',
                'tindakanmedisyangdilakukan' => 'Chest X-ray',
                'informasikhusus' => 'None',
                'pemberianobat' => 'Paracetamol',
                'hasillabo' => 'Positive for pneumonia',
                'hasilradio' => 'Consolidation in right lung',
                'persetujuan' => 'Yes',
    		]);
 
    	}
    }
}