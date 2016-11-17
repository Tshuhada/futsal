<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Lapangan;
use App\Sparing;
use App\SparingLog;

class SparingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sampel Lapangan
        $lapangan1 = Lapangan::create(['nama'=>'Lapangan 1', 'lokasi'=>'Centro1', 'informasi'=>'Sukses 1']);
        $lapangan2 = Lapangan::create(['nama'=>'Lapangan 2', 'lokasi'=>'Centro2', 'informasi'=>'Sukses 2']);
        $lapangan3 = Lapangan::create(['nama'=>'Lapangan 3', 'lokasi'=>'Centro3', 'informasi'=>'Sukses 3']);
        $lapangan4 = Lapangan::create(['nama'=>'Lapangan 4', 'lokasi'=>'Centro4', 'informasi'=>'Sukses 4']);

        //Sampel Sparing
        $sparing1 = Sparing::create(['users_id'=>'1', 'lapangan_id'=>'1', 'tanggal'=>'2016-10-17',
                                'jam'=>'04:13:00', 'konsekuensi'=>'Akan Di Denda', 'status'=>'away', 'logo'=>'yuio']);
        $sparing2 = Sparing::create(['users_id'=>'1', 'lapangan_id'=>'2', 'tanggal'=>'2016-10-17',
                                'jam'=>'05:13:00', 'konsekuensi'=>'Akan Di Denda', 'status'=>'away', 'logo'=>'yuio']);
        $sparing3 = Sparing::create(['users_id'=>'1', 'lapangan_id'=>'3', 'tanggal'=>'2016-10-17',
                                'jam'=>'06:13:00', 'konsekuensi'=>'Akan Di Denda', 'status'=>'away', 'logo'=>'yuio']);
        $sparing4 = Sparing::create(['users_id'=>'1', 'lapangan_id'=>'1', 'tanggal'=>'2016-10-17',
                                'jam'=>'07:13:00', 'konsekuensi'=>'Akan Di Denda', 'status'=>'away', 'logo'=>'yuio']);

        // Sample Sparing
        $member = User::where('email', 'member@gmail.com')->first();
        SparingLog::create(['user_id' => $member->id, 'sparing_id'=>$sparing1->id, 'is_returned' => 0]);
        SparingLog::create(['user_id' => $member->id, 'sparing_id'=>$sparing2->id, 'is_returned' => 0]);
        SparingLog::create(['user_id' => $member->id, 'sparing_id'=>$sparing3->id, 'is_returned' => 1]);
    }
}
