<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" id="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://cdn.bootcss.com/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
    <link href="/css/style.css?v=12" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>
<div id="app">
    <div class="ui container">
        <div class="ui horizontal divider mb-4">Laravel Elasticsearch</div>
        @yield('content')
    </div>
</div>
<!-- Scripts -->
<script src="https://cdn.bootcss.com/jquery/3.3.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/semantic-ui/2.3.1/semantic.min.js"></script>
<script>
    $('#es-input').on('keypress',function(event){
        if(event.keyCode == 13)
        {
            var q = $('#es-input').val();
            window.location.href="/search?q="+q;
        }

    });
</script>
</body>
</html>