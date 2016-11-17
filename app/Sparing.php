<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Sparing extends Model
{
    protected $table    = 'sparings';

    protected $fillable = ['users_id','versus_id','lapangan_id','tanggal','jam','konsekuensi', 'status'];

    public function sparinglog()
    {
      return $this->hasMany('App\SparingLog');
    }

    public function users()
    {
      return $this->belongsTo('App\User');
    }

    public function lapangan()
    {
      return $this->belongsTo('App\Lapangan');
    }
}
