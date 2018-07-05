<?php
	namespace App\Http\Controllers;

	use Illuminate\Support\Facades\DB;
	use Request;

	class UsuarioController extends Controller
	{
		public function checkIn(){
			$user = Request::input('login');
			$pass = Request::input('senha');
			$result = DB::table('usuario')
										->where('Login', '=', $user )
										->where('Senha', '=', $pass)
										->first();
			//$result = DB::select('select * from usuario where Login = ?', [$user]);
			if ($result) {
				return view('dashboard');
				//return view('dashboard');
			}else{
				return ('não logado '.$user.' '.$pass);
			}
		}
	}

?>