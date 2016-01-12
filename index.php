<!DOCTYPE html>
<html lang="html">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Teste Guilherme Tufaile</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>

		<!-- Custom Scripts -->
		<script src="includes/scripts.js" type="text/javascript"></script> 					<!-- Scripts Uteis -->

	</head>
	<body>
		<h1 class="text-center">Teste ZUP</h1>
		<form role="form" action="control/main.php" method="post" id="info_form" autocomplete="off">          
				<div class="row">
					<div class="form-group">				
					  <div class="col-md-6">
					  	<input id="info" name="info" type="text" placeholder="Digite aqui as informações" class="form-control input-md" maxlength="80" required="">
					  	<span class="glyphicon glyphicon-question-sign icone_duvida" aria-hidden="true" onclick="mostrahelp('info_help')"></span>
					  </div>
					  <div class="col-md-4">
					  	<input type="submit" id="btn-login" class="btn btn-info btn-lg btn-block" value=">> Enviar ">
					  </div>
					</div>  
				</div>
				<div class="row">
					<div class="col-md-12">
						<span class="help-block" id="info_help">Insira primeiramente a as cordenadas (numéricas) e a direção (N = Norte, S = Sul, L = Leste e O = Oeste), envie</span>  
					</div>
				</div>          
        </form>
	</body>
</html>