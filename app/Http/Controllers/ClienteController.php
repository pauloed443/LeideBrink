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

		public function showAdd(){
			return view('cliente.new');
		}

		public function add(){
			if (Request::has('nome')) {	//verifica se o campo item existe
				$nome = Request::input('nome');
				$tel1 = Request::input('phone1');
				$tel2 = Request::input('phone2');
				$tipopessoa = Request::input('tipopessoa');
				$cnpj = Request::input('cnpj');
				$cpf = Request::input('cpf');
				$rg = Request::input('rg');
				$email = Request::input('email');
				$dtaniversario = Request::input('dtaniversario');
				$obs = Request::input('obs');

				if (!is_null($nome)) {
					DB::table('cliente')->insert(
						['Nome'=>$nome, 'Phone1'=>$tel1, 'Phone2'=>$tel2, 'TipoPessoa'=>$tipopessoa, 'CNPJ'=>$cnpj, 'CPF'=>$cpf, 'RG'=>$rg, 'Email'=>$email, 'DataAniversario'=>$dtaniversario, 'Obs'=>$obs]
					);
				}
			}
			return redirect('/cliente');
		}

		public function remove($id){
			$result = DB::table('cliente')
										->where('Id', $id)
										->delete();
			return redirect('/cliente');
		}

		public function showUpdate($id){
			$result = DB::table('cliente')->where('Id', $id)->first();
			$array = array('cliente'=>$result);
			return view('cliente.edit', $array);
		}

		public function update(){
			$id = Request::input('id');
			$nome = Request::input('nome');
			$tel1 = Request::input('phone1');
			$tel2 = Request::input('phone2');
			$tipopessoa = Request::input('tipopessoa');
			$cnpj = Request::input('cnpj');
			$cpf = Request::input('cpf');
			$rg = Request::input('rg');
			$email = Request::input('email');
			$dtaniversario = Request::input('dtaniversario');
			$obs = Request::input('obs');
			$result = DB::table('cliente')
										->where('Id', $id)
										->update(['Nome'=>$nome, 'Phone1'=>$tel1, 'Phone2'=>$tel2, 'TipoPessoa'=>$tipopessoa, 'CNPJ'=>$cnpj, 'CPF'=>$cpf, 'RG'=>$rg, 'Email'=>$email, 'DataAniversario'=>$dtaniversario, 'Obs'=>$obs]);
			return redirect('/cliente');
		}

	}

?>