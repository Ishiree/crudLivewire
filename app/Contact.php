<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'no_hp',
        'email'
    ];
}
