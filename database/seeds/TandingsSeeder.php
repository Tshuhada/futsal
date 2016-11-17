<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Tanding;

class TandingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Sample penulis
      $author1 = Author::create(['nama'=>'Lapangan 1']);
      $author2 = Author::create(['nama'=>'Lapangan 2']);
      $author3 = Author::create(['nama'=>'Lapangan 3']);
      // Sample buku
      $book1 = Tanding::create(['nama'=>'Persahabatan', 'author_id'=>$author1->id, 'waktu'=>'2016-10-1']);
      $book2 = Tanding::create(['nama'=>'Turnament', 'author_id'=>$author2->id, 'waktu'=>'2016-09-1']);
      $book3 = Tanding::create(['nama'=>'Kantor', 'author_id'=>$author3->id, 'waktu'=>'2016-08-1']);
      $book4 = Tanding::create(['nama'=>'Keluarga', 'author_id'=>$author3->id, 'waktu'=>'2016-07-1']);
    }
}
