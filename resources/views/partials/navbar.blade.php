
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Leide Brink</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-pills ml-5 mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/home')}}">Dashboard <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastro
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/cliente')}}">Cliente</a>
          <a class="dropdown-item" href="#">Endereço</a>
          <a class="dropdown-item" href="#">Forma de Pagamento</a>
          <a class="dropdown-item" href="#">Serviço</a>
          <a class="dropdown-item" href="#">Usuário</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Ordem de Serviço</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Financeiro
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Contas a Receber</a>
          <a class="dropdown-item" href="#">Movimento Caixa</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Relatório
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Agenda de Eventos</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Configurações
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Colaborador</a>
          <a class="dropdown-item" href="#">Empresa</a>
          <a class="dropdown-item" href="#">E-mail</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <label><a href="{{'./'}}" class="text-light nav-link">Sair</a></label>
    </form>
  </div>
</nav>
