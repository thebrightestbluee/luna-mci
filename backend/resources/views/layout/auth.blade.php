<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Luna MCI | @yield('title')</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <style>
            body {
                /* background-image: linear-gradient(to right top, #000000, #382936, #5b5578, #5b8cc2, #00caff); */
                background-image: radial-gradient(circle, #dbdbdb, #cccccc, #bdbdbd, #aeaeae, #9f9f9f);
            }
            .login-logo a{
                color: #fff !important;
            }
        </style>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a>Luna<b>MCI</b></a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>

@section('scripts')
    <script>
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    </script>
@endsection