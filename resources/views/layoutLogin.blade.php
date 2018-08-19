<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
</head>
<body>

<section id="One">
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand {{ request()->is('login')? 'active' : ''}}" href="{{route('login')}}">Gagonzasbook</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a class="{{ request()->is('formUsuario')? 'active' : ''}}" href="{{ route('newUser') }}">Registrar cuenta</a></li>
				<li><a href="#">Recuperar contraseña</a></li>
				<li><a href="{{route('chat.index')}}">Chat público</a></li>

			</ul>			
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
<h1>{{request()->is('login')? 'Estás en el login': 'No estás en el login'}}</h1>
</section>


<script src="/js/app.js"></script>

@yield('contenido')


<footer id="footer" style="bottom: 0% "><p style="color:white">Gabriel González Segura|Copyright ©{{date('Y')}}</p></footer>

</body>
</html>