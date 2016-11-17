<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Lapangan extends Model
{
    protected $fillable = ['nama','lokasi','informasi'];

    public function sparings()
    {
      return $this->hasMany('App\Sparing');
    }
}
