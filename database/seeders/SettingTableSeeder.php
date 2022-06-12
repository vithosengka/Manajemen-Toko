<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => '1',
            'nama_perusahaan' => 'Unsrat Mart',
            'alamat' => 'Jln Kampus Bahu',
            'telepon'=> '081241948920',
            'tipe_nota'=> 1,
            'diskon' => 2,
            'path_logo' => '/images/mart.png',
            'path_kartu_member' => '/images/member.png',
        ]);
    }
}
