<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Karyawan extends Model implements Authenticatable
{
    //
    use \Illuminate\Auth\Authenticatable;
    public $timestamps = false;
}
