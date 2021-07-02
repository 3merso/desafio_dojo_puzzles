<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Números primos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Barra de Navegação</a>
        </div>
    </nav>
    <hr>
    <form class="row g-3" novalidate action="{{route('calculo')}}" method="POST">
        @csrf
        <div class="row">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="addon2" name="input" placeholder="Digite uma palavra" aria-label="Digite uma palavra" aria-describedby="addon2">
                <button class="btn btn-primary" id="addon1" type="submit">Enviar</button>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/git/jquery-3.x-git.js"></script>
</body>
</html>