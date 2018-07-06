@extends('layouts.principal')

@section('principal_style')
    <!-- Custom styles for this template -->
    
@endsection

@section('principal_content')

	@include('masks.fone')
    @include('partials.navbar')
    
    <div class="container-fluid justify-content-center">
    	<div class="container my-5">
    		<div class="row d-flex mx-1">
    			<div class="mr-auto p-2"><h2>Clientes</h2></div>
    			<div class=" p-2"><a href="cliente/new/" class="btn btn-primary">+ Novo</a></div>
    		</div>

                <div class="table-responsive">

                    <table class="table">

                        <thead class="thead-dark">
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th>Data Aniversario</th>
                            <th class="text-center">Operações</th>
                        </thead>
                    	<tbody>
	                    	@if(count($clientes) > 0)
			            		
		                        @foreach ($clientes as $value)
		                            <tr>
		                                <td class="centro_vertical col-md-4">{{ $value->Nome }}</td>
		                                <td class="centro_vertical col-md-2"><?= fone($value->Phone1).' / '. fone($value->Phone2) ?></td>
		                                <td class="centro_vertical col-md-3">{{ $value->Email }}</td>
		                                <td class="centro_vertical col-md-4">{{ $value->DataAniversario }}</td>
		                                <td class="centro_vertical col-md-2 text-center">
		                                	<a href="cliente/edit/{{ $value->Id }}">
												<span class="btn btn-primary btn-sm">
											      	<span class="glyphicon glyphicon-edit">Edt</span>
											  	</span>
											</a>
											<a href="cliente/del/{{ $value->Id }}">
												<span class="btn btn-primary btn-sm">
											      	<span class="glyphicon glyphicon-remove">Del</span>
											  	</span>
											</a>
		                                </td>
		                            </tr>

	                        	@endforeach
	                        	<th>
	                        		<p>Registros: {{ $total=count($clientes) }}</p>
	                        	</th>
					        @else
					        	<td> - Nenhum Registro encontrado </td>
					    </tbody>
	                            <th>
					            	<p>Registros: 0</p>
	                    		</th>
			                @endif
			            
                    </table>
                </div>
            
        </div>
    </div>

@endsection