<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address' => 'Sumenep',
            'no_tlp' => '082335413676',
            'ttl' => '2000-11-12',
            'foto' => 'picture.png'
        ]);
    }
}
