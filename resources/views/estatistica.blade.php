<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Estatística simples</title>
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Barra de Navegação</a>
        </div>
    </nav>
    <hr>

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Estatística simples</h3>
			</div>
			
			<div class="panel-body">
				<form action="#" class="form-horizontal">
					<fieldset>
						<legend>Preencha os campos abaixo</legend>
						<div class="form-group">
							<label for="1" class="col-sm-2 control-label">1° Número</label>
							<div class="col-sm-1">
								<input value="0" type="number" class="form-control" id="1">
							</div>
						</div>
						
						<div class="form-group">
							<label for="2" class="col-sm-2 control-label">2° Número</label>
							<div class="col-sm-1">
								<input value="0" type="number" class="form-control" id="2">
							</div>
						</div>

                        <div class="form-group">
							<label for="3" class="col-sm-2 control-label">3° Número</label>
							<div class="col-sm-1">
								<input value="0" type="number" class="form-control" id="3">
							</div>
						</div>

                        <div class="form-group">
							<label for="4" class="col-sm-2 control-label">4° Número</label>
							<div class="col-sm-1">
								<input value="0" type="number" class="form-control" id="4">
							</div>
						</div>

                        <div class="form-group">
							<label for="5" class="col-sm-2 control-label">5° Número</label>
							<div class="col-sm-1">
								<input value="0" type="number" class="form-control" id="5">
							</div>
						</div>

                        <div class="form-group">
							<label for="6" class="col-sm-2 control-label">6° Número</label>
							<div class="col-sm-1">
								<input value="0" type="number" class="form-control" id="6">
							</div>
						</div>
					</fieldset>
					<hr>
					<button type="button" class="btn btn-primary" id="calcular">
						Calcular
					</button>
                    <button class="btn btn-info" id="primo" type="button" onclick="paravrasPrimas()">Mudar desafio</button>

				</form>
			</div>
		</div>
	</div>
    <script src="https://code.jquery.com/git/jquery-3.x-git.js"></script>
	<script>
        $('#calcular').click(function() {

            let qtd = 0;
            let min = 0;
            let soma = 0;
            var valores = [];
            var input = [];

            $( ".form-control" ).each(function() {

                if ($(this).val() != '' && $(this).val() != '0') {
                    soma += parseFloat($(this).val(), 2);
                    input = $(this).val();
                    valores.push($(this).val());
                    qtd++;
                }
                $(this).val('0');

            });

            min = Math.min.apply(Math, valores);
            max = Math.max.apply(Math, valores);
            media = soma/qtd;

            alert(
                "Conforme os " + qtd + " campos digitados: \n" + 
                "A média é " + parseFloat(media, 2) + "\n" +
                "O valor máximo é " + max + "\n" +
                "O valor mínimo é " + min + "\n"
            )
        });

        function paravrasPrimas() {
            window.location.href = "{{route('inicio')}}"
        }
    </script>
</body>
</html>