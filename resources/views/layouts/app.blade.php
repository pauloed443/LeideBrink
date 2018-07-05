@extends('layouts.stub')


<?php /* Aqui colocamos espaço para CSS pontuais das páginas que herdam esta */ ?>
@section('stub_styles')

    @yield('styles')

@endsection


<?php
/*
 * Barra superior de navegação do sistema
 */
?>
@section('stub_content')
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            @include('partials.navbar')

            <div id="navbar" class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
                    @include('partials.menu')
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>

    @include('partials.message')

@endsection


<?php /* Aqui colocamos espaço para scripts pontuais das páginas que herdam esta */ ?>
@section('stub_scripts')

    @yield('scripts')

@endsection
