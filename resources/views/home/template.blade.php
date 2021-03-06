<!DOCTYPE html>

<head>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>@yield('template_title')</title>

    @yield('template_css')

    <style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #2E2E2E;
        color: white;
        text-align: center;
        }
    </style>

</head>

<body>
    
    {{--navbar--}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset ('image/look-1.png') }}" alt="logo" height="60" width="60"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
            <a class="nav-link" href="{{ route('trending') }}">Trending Places</a>
            <a class="nav-link" href="{{ route('blog') }}">Blogs</a>
            <a class="nav-link" href="{{ route('show') }}" tabindex="-1" aria-disabled="true">Show</a>
            {{-- <button class="button-narrow btn-success bt" style="margin-left: 240%">
                <a class="nav-link " href="/login">
                    Login
                </a>
            </button> --}}
        </div>
        </div>
    </div>
    </nav>

    @yield ('template_body')
    
    <div class="footer">
        <p>Footer</p>
    </div>

    @yield ('template_script')


</body>

</html>