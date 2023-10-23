<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <h1>Użytkownicy</h1>
    Imię i Nazwisko {{$imie}} {{$nazwisko}}<br>
    Miasto: {{$miasto}}<br>

    Hobby: <ul>@foreach($hobby as $x)
                <li>{{$x}}</li>
            @endforeach
            </ul>
</body>
</html>