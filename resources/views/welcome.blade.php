<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <div>
            <!-- Link to estadio list -->
            <div>
                <a href="{{ route('estadios.index') }}">Estadios</a>
            </div>
            <!-- Link to option list -->
            <div>
                <a href="{{ route('partidos.index') }}">Partidos</a>
            </div>
        </div>
    </body>
</html>
