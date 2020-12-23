<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/logo/Icon_logo.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Font awesome --}}
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
        crossorigin="anonymous"/>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/search.js') }}" defer></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Mono&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

</head>

<body>
    <div id="app">
        @include('inc.navbar')
        {{-- for search bar --}}
        <div class="d-none" id="show-search">
        <div class="container mt-3 d-flex justify-content-center align-items-center">
            <form class="form-inline form-search" action="/blog">
                <div class="form-group">
                    <input class="form-control form-control-sm form-search-input" type="search" name="search" placeholder="Topic, Title, Author" aria-label="Search">
                </div>

                <div class="form-group form-search-button">
                    <button type="submit" class="btn btn-blue btn-sm">
                        <i class="fas fa-search"></i> 
                    </button>
                </div>
            </form>          
            </div>
        </div>
        <main class="py-4 bg-lighty">
            @yield('content')
        </main>
        @include('inc.footer')
    </div>

    <script>
        var quill = new Quill('#editor', {
          theme: 'snow'
        });

        var Clipboard = Quill.import('modules/clipboard');
        var Delta = Quill.import('delta');

        class PlainClipboard extends Clipboard {
        convert(html = null) {
            if (typeof html === 'string') {
            this.container.innerHTML = html;
            }
            let text = this.container.innerText;
            this.container.innerHTML = '';
            return new Delta().insert(text);
        }
        }

        Quill.register('modules/clipboard', PlainClipboard, true);
    </script>
</body>
</html>
