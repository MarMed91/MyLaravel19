<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script type="{{ mix('js/app.js') }}"></script>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>

        <header class="header text-center mx-auto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8   mx-auto">
                        <div class="site-heading ">
                            <h1>Il Blog di Marko</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 ">
                    @yield('content')
                    @if ($errors->any())

                      <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div>
                      @endif
                      @if (session('success'))
                      <div class="alert alert-danger">
                          <div class="container">
                              {{ session('success') }}
                          </div>
                      </div>
                      @endif
                      <hr />
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
