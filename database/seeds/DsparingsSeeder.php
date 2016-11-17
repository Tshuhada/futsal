<?php

use Illuminate\Database\Seeder;
use App\Sparing;
use App\Dsparing;

class DsparingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Sampel Daftar Sparing
      $dsparing1 = Dsparing::create(['sparings_id'=>'1','users_id'=>'1','pesan'=>'Mantap']);
      $dsparing2 = Dsparing::create(['sparings_id'=>'2','users_id'=>'1','pesan'=>'Nyaman']);
      $dsparing3 = Dsparing::create(['sparings_id'=>'3','users_id'=>'1','pesan'=>'Banar']);
    }
}
