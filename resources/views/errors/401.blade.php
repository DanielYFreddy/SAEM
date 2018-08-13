<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SAEM</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

        <style type="text/css">
        	.container{
        		margin-top: 5%;
        	}
        </style>
       

    </head>
    <body>

    	<div class="container">
		    <div class="row justify-content-center">
		        <div class="col-md-6">
					<div class="card border-warning mb-3">
					  <div class="card-header bg-transparent border-warning">Acceso Restringido</div>
					  <div class="card-body text-center">
					    <img src="{{ asset('imagenes/lock.png') }}" style="width: 20%;">
					    <p class="card-text">Usted no tiene acceso a esta zona</p>
					    <p class="card-text"><a href="{{ route('home') }}">¿Deseas volver al inicio?</a></p>
					  </div>
					</div>
				</div>
			</div>
    	</div>

    </body>
</html>
