<?php

	namespace App\Http\Controllers;

	use Illuminate\Support\Facades\DB;
	use Request;

	class ClienteController extends Controller{

		public function show(){
			$result = DB::table('cliente')
										->select('*')->get();
			$array = array('clientes'=>$result);
			return view('cliente.clientes', $array);
		}

		public function add(){
			return view('cliente.new');
		}

	}

?>