<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $fillable = ['no_paket', 'nama_paket', 'harga_paket', 'keterangan'];

    public function costumers() {
        return $this->hasMany('App\Costumer', 'no_paket', 'id');
    }
}
