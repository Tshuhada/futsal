<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Dsparing extends Model
{
    protected $fillable = ['sparings_id','users_id','pesan'];

    public function sparings()
    {
      return $this->belongsTo('App\Sparing');
    }

    public function users()
    {
      return $this->belongsTo('App\User');
    }
    // public function sparings ()
    // {
    //   return $this->hasMany('App\Sparing');
    // }
    //
    // public function users ()
    // {
    //   return $this->hasMany('App\User');
    // }
}
