<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Example Code -->

    <nav class="navbar container-lg navbar-expand-lg bg-primary rounded-5 rounded-top">
        <div class="container-fluid d-flex justify-content-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav m-auto">
                    <a class="nav-link text-white m-auto" href="/student">Students</a>
                    <a class="nav-link text-white m-auto" href="/class">Class</a>
                    <a class="nav-link text-white m-auto" href="/ekskul">Extracurriculer</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
