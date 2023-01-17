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
                <li>{{$train->company}}</li>
                <h3>{{$train->departure_station}}</h3>
                <div>{{$train->arrival_station}}</div>
                <div>{{$train->departure_time}}</div>
                <div>{{$train->arrival_time}}</div>
                <div>{{$train->train_code}}</div>
                <div>{{$train->carriages}}</div>
                <div>{{$train->on_time}}</div>
                <div>{{$train->canceled}}</div>
                @endforeach
            </ul>

        </div>
    </main>

</body>

</html>


