<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <h1>Lista Treni</h1>
            <ul class="card">
                @foreach ($trains as $train)
                <li>Treno:{{$train->company}}</li>
                <h3>stazione di partenza:{{$train->departure_station}}</h3>
                <div>Stazione di arrivo:{{$train->arrival_station}}</div>
                <div>Orario di partenza:{{$train->departure_time}}</div>
                <div>Orario di arrivo:{{$train->arrival_time}}</div>
                <div>Codice treno:{{$train->train_code}}</div>
                <div>Carrozza:{{$train->carriages}}</div>
                @endforeach
            </ul>

        </div>
    </main>

</body>

</html>


