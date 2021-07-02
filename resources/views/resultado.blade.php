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
                <button class="btn btn-primary" id="addon1" type="button" onclick="voltar()">Voltar</button>
                <button class="btn btn-info" id="primo" type="button" onclick="estatistica()">Mudar desafio</button>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/git/jquery-3.x-git.js"></script>
    <script>
        alert("{{$mensagem}}")

        function voltar() {
            window.location.href = "{{route('inicio')}}"
        }

        function estatistica() {
            window.location.href = "{{route('estatistica')}}"
        }
    </script>
</body>
</html>