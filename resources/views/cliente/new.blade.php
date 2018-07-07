@extends('layouts.principal')

@section('principal_style')
    <!-- Custom styles for this template -->
    
@endsection

@section('principal_content')
    
    @include('partials.navbar')
    
    <div class="container-fluid justify-content-center">
    	<div class="container my-5">
    		<div class="row d-flex mx-1">
    			<div class="mr-auto p-2"><h2>Novo Cliente</h2></div>
    			<div class=" p-2"><a href="cliente/new/" class="btn btn-primary">Adicionar</a></div>
    		</div>

            <form>
            	<div class="form-row">
            		<div class="col-md-6">
            			<label>Nome: *</label>
            			<input type="text" class="form-control" name="nome" placeholder="Nome">
            		</div>
            	</div>
            </form>
        </div>
    </div>

@endsection