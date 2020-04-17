<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Primer blog</title>
</head>

<body>
    <br>
    <div class="container">
        <a href="{{ route('inicio')}}" class="btn btn-primary">Inicio</a>
        <a href="{{ route('fotos')}}" class="btn btn-primary">Fotos</a>
        <a href="{{ route('nosotros')}}" class="btn btn-primary">nosotros</a>
        <a href="{{ route('notas')}}" class="btn btn-primary">Notas</a> @yield('cuerpo')
    </div>
    <div class="card">
        <div class="card-header">
            Footer
            <blockquote class="blockquote mb-0">

                <footer class="blockquote-footer">Desarrollado por :<cite title="Source Title"> Jairo Cádiz</cite></footer>
            </blockquote>
        </div>
        <div class="card-body">

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
<style>
    .card {
        background: #111;
        color: #fff;
        width: 100%;
        text-align: center;
    }
</style>

</html>