<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel</title>
</head>
<body>
    @foreach($trains as $train)
    <p>{{$train['Azienda']}}</p>
    @endforeach
</body>
</html>