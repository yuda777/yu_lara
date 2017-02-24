<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pelanggan extends Model
{
	//protected $primaryKey = "idx";
	protected $table = "pelanggan";

	//protected $fillable = array('idx','nama');

    public function transaksi(){
    	return $this->hasMany('App\Transaksi','id_pelanggan');
    }
}
