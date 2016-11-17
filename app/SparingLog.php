<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SparingLog extends Model
{
    protected $fillable = ['sparing_id', 'user_id', 'is_returned'];

    public function getStatusAttribute()
    {
      if($this->is_returned == 0){
            return 'Menunggu';
        }elseif($this->is_returned == 1) {
            return 'Setuju';
        }elseif($this->is_returned == 2) {
            return 'Tidak Setuju';
        }else {
            return 'Batal';
        }
    }

    public function sparings()
    {
        return $this->belongsTo('App\Sparing', 'sparing_id');
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function lapangans()
    {
        return $this->belongsTo('App\Lapangan');
    }
}
