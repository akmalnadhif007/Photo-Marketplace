<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    protected $table = 'submit';

    public function submit(){
        return $this->belongsTo('App\Submit');
    }

    public function tag(){
        return $this->belongsToMany('App\Tag');
    }

    public function upload(){
        return $this->belongsToMany('App\Upload');
    }
}
