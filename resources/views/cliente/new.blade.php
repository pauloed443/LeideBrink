@extends('layouts.principal')

@section('principal_style')
    <!-- Custom styles for this template -->
    
@endsection

@section('principal_content')
    
    @include('partials.navbar')
    
    <div class="container-fluid justify-content-center">
    	<div class="container my-5">
    		<form action="{{ url('cliente/save') }}" method="POST">
    			{{ csrf_field() }}
	    		<div class="row d-flex mx-1">
	    			<div class="mr-auto p-2"><h2>Novo Cliente</h2></div>
	    			<div class=" p-2"></div>
	    		</div>

            	<div class="form-group row">
            		<div class="col-6">
            			<label>Nome: *</label>
            			<input type="text" class="form-control" name="nome" placeholder="Nome" required="">
            		</div>
            		<div class="col-3">
            			<label>Telefone 1:</label>
            			<input type="text" maxlength="11" onkeypress="return SoNumero(event)" class="form-control" name="phone1" placeholder="Telefone">
            		</div>
            		<div class="col-3">
            			<label>Telefone 2:</label>
            			<input type="text" maxlength="11" onkeypress="return SoNumero(event)" class="form-control" name="phone2" placeholder="Telefone">
            		</div>
            	</div>

            	<div class="form-group row">
            		<div class="col-2">
            			<label for="exampleFormControlSelect1">Tipo Pessoa</label>
					    <select name="tipopessoa" class="form-control" id="exampleFormControlSelect1" onchange="pf_pj(this.value)">
					      <option value="nd"></option>
					      <option value="pf" required="">Física</option>
					      <option value="pj" required="">jurídica</option>
					    </select>
            		</div>
            		<div class="col-4">
            			<label>CNPJ:</label>
            			<input type="text" maxlength="14" onkeypress="return SoNumero(event)" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" disabled="">
            		</div>
            		<div class="col-3">
            			<label>CPF:</label>
            			<input type="text" maxlength="11" onkeypress="return SoNumero(event)" class="form-control" id="cpf" name="cpf" placeholder="CPF" disabled="">
            		</div>
            		<div class="col-3">
            			<label>RG:</label>
            			<input type="text" maxlength="7" onkeypress="return SoNumero(event)" class="form-control" id="rg" name="rg" placeholder="RG" disabled="">
            		</div>
            	</div>

            	<div class="form-group row">
            		<div class="col-6">
            			<label>Email:</label>
            			<input type="email" class="form-control" name="email" placeholder="E-mail" required="">
            		</div>
            		<div class="col-3">
            			<label>Data Aniversário:</label>
            			<input type="date" class="form-control" name="dtaniversario" placeholder="">
            		</div>
            	</div>

            	<div class="form-group row">
            		<div class="col">
            			<label>Observação:</label>
            			<input type="text" class="form-control" name="obs" placeholder="Obs">
            		</div>
            	</div>

            	<div class=" p-2"><button type="submit" class="btn btn-primary">Adicionar</button></div>
            </form>
        </div>
    </div>

@endsection

@section('principal_scripts')

    <script type="text/javascript">
		function pf_pj(value)
		{
			if (value==='pf') {
				document.getElementById("cpf").disabled = false; //Habilitando
				document.getElementById("rg").disabled = false; //Habilitando
				document.getElementById("cnpj").disabled = true; //Desabilitando
			}else if (value==='pj') {
				document.getElementById("cnpj").disabled = false; //Habilitando
				document.getElementById("cpf").disabled = true; //Desabilitando
				document.getElementById("rg").disabled = true; //Desabilitando
			}else{
				document.getElementById("cnpj").disabled = true; //Desabilitando
				document.getElementById("cpf").disabled = true; //Desabilitando
				document.getElementById("rg").disabled = true; //Desabilitando
			}
		}
	</script>

	@include('masks.sonumeros')

@endsection