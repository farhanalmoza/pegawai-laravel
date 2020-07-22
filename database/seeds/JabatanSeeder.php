<?php

use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan')->insert(array(
        	['nama_jabatan' => 'Direktur', 'keterangan' => ''],
        	['nama_jabatan' => 'Manajer', 'keterangan' => ''],
        	['nama_jabatan' => 'Sekertaris', 'keterangan' => '']
        ));
    }
}
