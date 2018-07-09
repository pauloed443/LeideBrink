<?php

	namespace App\Http\Controllers;

	use Illuminate\Support\Facades\DB;
	use Request;

	class FormaPagamentoController extends Controller{

		public function show(){
			$result = DB::table('forma_pagamento')
										->select('*')->get();
			$array = array('formaspagamento'=>$result);
			return view('forma_de_pagamento.formapagamento', $array);
		}

		public function showAdd(){
			return view('forma_de_pagamento.new');
		}

		public function add(){
			if (Request::has('nome')) {	//verifica se o campo item existe
				$nome = Request::input('nome');
				$quantidadeparcelas = Request::input('quantidadeparcelas');
				$primeiraparcela = Request::input('primeiraparcela');
				$intervaloparcelas = Request::input('intervaloparcelas');
				
				if (!is_null($nome)) {
					DB::table('forma_pagamento')->insert(
						['Descricao'=>$nome, 
						'QuantidadeParcelas'=>$quantidadeparcelas, 
						'PrimeiraParcela'=>$primeiraparcela, 
						'IntervaloParcelas'=>$intervaloparcelas]
					);
				}
			}
			return redirect('/forma-pagamento');
		}

		public function showUpdate($id){
			$result = DB::table('forma_pagamento')->where('Id', $id)->first();
			$array = array('forma_pagamento'=>$result);
			return view('forma_de_pagamento.edit', $array);
		}

		public function update(){
			$id = Request::input('id');
			$nome = Request::input('nome');
			$quantidadeparcelas = Request::input('quantidadeparcelas');
			$primeiraparcela = Request::input('primeiraparcela');
			$intervaloparcelas = Request::input('intervaloparcelas');

			$result = DB::table('forma_pagamento')
										->where('Id', $id)
										->update(['Descricao'=>$nome, 'QuantidadeParcelas'=>$quantidadeparcelas, 'PrimeiraParcela'=>$primeiraparcela, 'IntervaloParcelas'=>$intervaloparcelas]);
			return redirect('/forma-pagamento');
		}

		public function remove($id){
			$result = DB::table('forma_pagamento')
										->where('Id', $id)
										->delete();
			return redirect('/forma-pagamento');
		}

	}

?>