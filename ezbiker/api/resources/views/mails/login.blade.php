HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EZBiker - Login Successful</title>
    <style>
        .container {
            background-color: #212122; 
            color: #fff; 
            padding: 20px; 
        }

        h1, h2, h3, h4 {
            text-align: center;
        }

        h3 {
            font-size: 2rem;
            color: #C94B0E;
            font-weight: bold;
        }

        .success-icon {
            font-size: 4rem;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <i class="fas fa-check-circle success-icon"></i> <h1>Gracias por iniciar sesión, {{ $name }}</h1>
        <h2>Estás conectado(a) a EZBiker</h2>
        <h4>¡Comienza a explorar!</h4>
    </div>
</body>
</html>