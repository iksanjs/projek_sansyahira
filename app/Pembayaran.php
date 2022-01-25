<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = ['no_pembayaran', 'no_customer', 'tgl_pembayaran', 'bayar'];

    public function costumer() {
        return $this->belongsTo('App\Costumer', 'no_costumer', 'id');
    }
}
