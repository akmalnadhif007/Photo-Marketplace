<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = 'upload';

    public function submit(){
        return $this->belongsToMany('App\Submit');
    }
}
