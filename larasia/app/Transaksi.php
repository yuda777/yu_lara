<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Transaksi extends Model
{
	//protected $primaryKey = "idx";
	protected $table = "transaksi";

	//protected $fillable = array('idx','nama');

    public function pelanggan(){
    	return $this->belongsTo('App\Pelanggan');
    }
}
