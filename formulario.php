<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Segurança com PHP - Formulário de Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
    <body>
        <div class="container">
			<div class="col-xs-6 col-xs-offset-3">
				<fieldset>
					<legend>Formulário de Login</legend>
					<form method="post" action="consulta.php">
						<div class="form-group">
							<label>Nome:</label>
							<input type="text" name="login" class="form-control">
						</div>
						<div class="form-group">
							<label>Senha:</label>
							<input type="password" name="senha" class="form-control">
						</div>
						<button type="submit" name="enviar" class="btn btn-primary">enviar</button>
						<button type="reset" name="reset" class="btn btn-default">resetar</button>
					</form>
				<fieldset>
			</div>
        </div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>

                
        