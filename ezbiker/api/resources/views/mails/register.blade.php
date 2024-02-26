<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            background-color: #202020; 
        }
        h1,h2,h3{
            text-align: center;
        }
        h3{
            font-size: 2rem;
            color:  #C94B0E;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gracias por registrarte {{ $name }}</h1>
        <h2>Tu codigo de verificacion es:</h2>
        <h3>{{ $token }}</h3>
    </div>
</body>
</html>