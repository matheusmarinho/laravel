<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Comanda extends Controller
{
    

	public function index () {


		$consumos = DB::select('select Comanda,Status,nome,IDVenda,Qtde,VUnit,value from comanda where  IDVenda = 2 ');
		
        return view('comanda',['consumo'=>$consumos]);
	}


}
