<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class haberler extends Model
{
    protected $table='haberler';
    protected $fillable=['baslik','icerik'];
}
