@extends('layouts.principal')

@section('principal_style')
    <!-- Custom styles for this template -->
    
@endsection

@section('principal_content')
    
    @include('partials.navbar')
    
    <div class="container-fluid justify-content-center">
    	<div class="container my-5">
    		<form action="{{ url('forma-pagamento/edit/$forma_pagamento->Id') }}" method="POST">
    			{{ csrf_field() }}
	    		<div class="row d-flex mx-1">
	    			<div class="mr-auto p-2"><h2>Atualizar Forma de Pagamento</h2></div>
	    			<div class=" p-2"></div>
	    		</div>

            	<div class="form-group row">
            		<input type="hidden" name="id" value="{{ $forma_pagamento->Id }}">
            		<div class="col-6">
            			<label>Nome: *</label>
            			<input type="text" class="form-control" name="nome" value="{{ $forma_pagamento->Descricao }}" placeholder="Descrição da Parcela" required="">
            		</div>
            		<div class="col-3">
            			<label>Quantidade Parcelas:</label>
            			<input type="text" onkeypress="return SoNumero(event)" class="form-control" name="quantidadeparcelas" value="{{ $forma_pagamento->QuantidadeParcelas }}" placeholder="Quantidade de Parcelas">
            		</div>
                </div>

                <div class="form-group row">
            		<div class="col-3">
            			<label>Primeira Parcela:</label>
            			<input type="text" onkeypress="return SoNumero(event)" class="form-control" name="primeiraparcela" value="{{ $forma_pagamento->PrimeiraParcela }}" placeholder="Em dias">
            		</div>
            		<div class="col-3">
            			<label>Intervalo Pacelas:</label>
            			<input type="text" onkeypress="return SoNumero(event)" class="form-control" name="intervaloparcelas" value="{{ $forma_pagamento->IntervaloParcelas }}" placeholder="Entre Parcelas">
            		</div>
            	</div>

            	<div class=" p-2">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('principal_scripts')

	@include('masks.sonumeros')

@endsection