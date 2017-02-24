<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pelanggan as Pelanggan;

class PelangganController extends Controller
{
	public function Pelanggan($id){
	    $pelanggan = Pelanggan::find($id);
		$data = array('pelanggan' => $pelanggan);
		return view('pelanggan', $data);
	}
}
