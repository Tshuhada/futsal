<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanding extends Model
{
    protected $fillable = ['nama', 'author_id', 'waktu'];

    public function author ()
    {
      return $this->belongsTo('App\Author');
    }
}
