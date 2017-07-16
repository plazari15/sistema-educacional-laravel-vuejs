<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @php
            $navBar = Navbar::withBrand(config('app.name'), route('admin.dashboard'))->inverse();
            if(Auth::check()){
                $arrLinks = [
                    ['link' => route('admin.users.index'), 'title' => 'Usuário'],
                ];

                $arrLinksRight = [
                    [
                        Auth::user()->name,
                        [
                            ['link' => route('logout'), 'title' => 'Logout', 'linkAttributes' => ['onclick' => "event.preventDefault();
                                                     document.getElementById(\"logout-form\").submit();"]]
                        ]
                    ]
                ];
                $navBar->withContent(Navigation::links($arrLinks))
                       ->withContent(Navigation::links($arrLinksRight)->right());

                $logoutForm = FormBuilder::plain([
                                'id' => 'logout-form',
                                'url' => route('logout'),
                                'method' => 'POST',
                                'style' => 'display:none'
                                ]);
            form($logoutForm);
            }
        @endphp
        {!! $navBar !!}


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
