@extends('layouts.stub')

@section('stub_style')
    <link href="{{ url('/') }}/css/login.css" rel="stylesheet">
@endsection

@section('stub_content')
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 ">

                    <form class="form-signin" role="form" method="POST"
                          action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <h2 class="foram-signin-heading text-center"><?= config('app.name'); ?></h2>

                        <div class="{{ $errors->has('login') ? ' has-error' : '' }}">
                            <label class="sr-only">{{trans('user.field.login')}}</label>
                            <input type="text" autofocus class="form-control" name="login"
                                   value="{{ old('text') }}"
                                   placeholder="Login" required>

                            @if ($errors->has('login'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('login') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="sr-only">Senha</label>

                            <input type="password" class="form-control" name="password"
                                   placeholder="Senha" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label> <input type="checkbox" name="remember"> Manter-me conectado
                                </label>
                            </div>
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
