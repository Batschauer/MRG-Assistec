<html>

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <div class=”container”>
        @component('components.navbar', ["current" => $current ?? ""])
        @endcomponent
        <main role="main">
            @hasSection('body')
            @yield('body')
            @endif
        </main>
    </div>

    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
</body>

</html>