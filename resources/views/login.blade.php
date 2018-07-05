@extends('layouts.principal')

@section('principal_style')
    <link href="{{ url('/') }}/css/login.css" rel="stylesheet">
@endsection

@section('principal_content')
    <div class="container">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-4 mt-5">

                    <form class="form-signin " role="form" method="POST"
                          action="./">
                        {{ csrf_field() }}
                        <h2 class="form-signin-heading text-center mb-4 mt-4">Leide Brink</h2>

                        <div class="form-label-group mb-2">
                            <input type="text" name="login" id="inputUser" class="form-control" placeholder="Usuario" required="" autofocus="">
                        </div>

                        <div class="form-label-group">
                            <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required="">
                        </div>

                        <div class="checkbox mb-3">
                            <label> 
                                <input type="checkbox" name="remember"> Manter-me conectado
                            </label>
                        </div>
                        <div class="row">&nbsp;</div>

                        <button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">
                            <i class="fa fa-btn fa-sign-in"></i>&nbsp;Entrar
                        </button>

                        <div class="text-center">
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Esqueceu a
                                senha?</a>
                        </div>
                        <div class="row">&nbsp;</div>

                    </form>

                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <div class="text-center" style="margin: 0px !important; font-size: 0px;">
                            <a href="http://www.bitsolucoes.com.br"
                               alt="Bitsoluções - Soluções em TI"
                               title="Bitsoluções - Soluções em TI"
                               target="_blank"
                               style="margin: 0 !important;padding: 0 !important;">
                                <img src="{{ url('/') }}/images/logo.png" width="150">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
