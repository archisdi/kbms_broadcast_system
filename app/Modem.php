<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modem extends Model
{
    protected $table = 'modem';

    public function identify(){
        return exec($this->path.'/gammu --identify');
    }
}
