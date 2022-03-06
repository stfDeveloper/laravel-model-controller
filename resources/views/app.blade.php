<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    <div class="container">
        @foreach ($movie as $key)
        <div class="card">
            <div class="titolo">
                <h4>{{$key["title"]}}</h4>
            </div>
            <div class="nationality">
                <p> Origine : "{{$key["nationality"]}}"</p>
            </div>
            <div class="dataProduzione">
                <p>Del : {{$key["date"]}}</p>
            </div>
            <div class="voti">
                <p>{{$key["vote"]}}</p>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>