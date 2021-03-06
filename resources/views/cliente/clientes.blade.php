@extends('layouts.principal')

@section('principal_style')
    <!-- Custom styles for this template -->
    
@endsection

@section('principal_content')

	@include('masks.fone')
    @include('partials.navbar')
    
    <div class="container-fluid">
    	<div class="container my-5">
    		<div class="row d-flex mx-1">
    			<div class="mr-auto p-2"><h2>Clientes</h2></div>
    			<form action="cliente/new/">
    				<div class=" p-2"><button type="submit" class="btn btn-primary">+ Novo</button></div>
    			</form>
    		</div>
    		<div class="table-responsive">
                <table class="table table-sm table-bordered">
                    <thead class="thead-dark">
                    	<tr>
                    		<th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Dt. Aniver.</th>
                            <th scope="text-center">Operações</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@if(count($clientes) > 0)
	                        @foreach ($clientes as $value)
	                            <tr>
	                            	<td scope="row">{{ $value->Id }}</td>
	                                <td>{{ $value->Nome }}</td>
	                                <td>{{ fone($value->Phone1).' / '. fone($value->Phone2) }}</td>
	                                <td>{{ $value->Email }}</td>
	                                <td>{{ $value->DataAniversario }}</td>
	                                <td>
	                                	<a href="cliente/edit/{{ $value->Id }}">
											<span class="btn btn-primary btn-sm">
										      	<span class="glyphicon glyphicon-edit">Edt</span>
										  	</span>
										</a>
										<a href="cliente/del/{{ $value->Id }}">
											<span class="btn btn-danger btn-sm">
										      	<span class="glyphicon glyphicon-remove">Del</span>
										  	</span>
										</a>
	                                </td>
	                            </tr>
                        	@endforeach
                    		<div>
                        		<ul class="list-group">
									<li class="list-group-item d-flex justify-content-between align-items-center">Total =
								    	<span class="badge badge-primary badge-pill">
								    		{{ $total=count($clientes) }}
								    	</span>
									</li>
								</ul>
                    		</div>
				        @else
				        	<td scope="row">-</td>
	                        <td>Nenhuma forma de pagamento cadastrada</td>
				        	<div>
                        		<ul class="list-group">
									<li class="list-group-item d-flex justify-content-between align-items-center">Total =
								    	<span class="badge badge-primary badge-pill">
								    		{{ $total=count($clientes) }}
								    	</span>
									</li>
								</ul>
                    		</div>
		                @endif
		            </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection