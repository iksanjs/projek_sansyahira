<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $fillable = ['no_costumer', 'nama', 'alamat', 'no_telepon', 'no_agent', 'no_paket'];
}
