<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{ url('/') }}/images/favicon.ico" type="image/x-icon"/>

    <title>Leide Brink</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"
          rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!--[if lt IE 9]>
    <script src="{{ url('/') }}/js/html5shiv.min.js"></script>
    <script src="{{ url('/') }}/js/respond.min.js"></script>
    <![endif]-->

    <!-- Styles -->
    <link rel="stylesheet" href='{{ url('/') }}/css/jquery-ui.min.css'>
    <link rel="stylesheet" href='{{ url('/') }}/css/bootstrap.min.css'>
    <link rel="stylesheet" href='{{ url('/') }}/css/bootstrap-theme.min.css'>
    <link rel="stylesheet" href='{{ url('/') }}/css/ie10-viewport-bug-workaround.css'>
    <link rel="stylesheet" href='{{ url('/') }}/css/jquery.datetimepicker.css'>
    <link rel='stylesheet' href='{{ url('/') }}/css/fullcalendar.min.css'>
    <link rel='stylesheet' href='{{ url('/') }}/css/app.css'>


    <?php /* Aqui colocamos espaço para CSS pontuais das páginas que herdam esta */ ?>
    @yield('principal_styles')

</head>
<body id="app-layout">

@yield('principal_content')

<!-- JavaScripts -->
<script src="{{ url('/') }}/js/jquery.js"></script>
<script src='{{ url('/') }}/js/moment-with-locales.min.js'></script>
<script src="{{ url('/') }}/js/bootstrap.min.js"></script>
<script src="{{ url('/') }}/js/jquery-ui.min.js"></script>
<script src="{{ url('/') }}/js/ie10-viewport-bug-workaround.js"></script>
<script src="{{ url('/') }}/js/jquery.datetimepicker.full.min.js"></script>
<script src="{{ url('/') }}/js/jquery.mask.min.js"></script>
<script src="{{ url('/') }}/js/fullcalendar.min.js"></script>
<script src="{{ url('/') }}/js/funcoes.js"></script>

<?php /* Aqui colocamos espaço para scripts pontuais das páginas que herdam esta */ ?>
@yield('principal_scripts')

</body>
</html>
