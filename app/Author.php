<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Author extends Model
{
    protected $fillable = ['nama'];

    public function tandings ()
    {
      return $this->hasMany('App\Tanding');
    }

    public static function boot()
    {
          parent::boot();
          self::deleting(function($author) {
            // mengecek apakah penulis masih punya buku
            if ($author->tandings->count() > 0) {
              // menyiapkan pesan error
              $html = 'Lapangan tidak bisa dihapus karena masih memiliki Jadwal Pertandingan : ';
              $html .= '<ul>';
              foreach ($author->tandings as $tanding) {
                $html .= "<li>$tanding->nama</li>";
              }
            $html .= '</ul>';

            Session::flash("flash_notification", [
              "level"=>"danger",
              "message"=>$html
            ]);
            // membatalkan proses penghapusan
            return false;
        }
      });
    }
}
