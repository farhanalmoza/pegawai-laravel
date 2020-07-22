<?php

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert(array(
        	['nama_pegawai' => 'Faqih Mumtaz', 'id_jabatan' => 1],
        	['nama_pegawai' => 'Abdul Latif', 'id_jabatan' => 2],
        	['nama_pegawai' => 'Affan Machrus', 'id_jabatan' => 4],
        	['nama_pegawai' => 'Farkhan', 'id_jabatan' => 2]
        ));
    }
}
