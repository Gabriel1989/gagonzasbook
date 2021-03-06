<!DOCTYPE html>
<html>
<head>
	<title>{{auth()->user()->name}}</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
</head>
<body>

<section id="One">
<nav class="navbar navbar-default" role="navigation" style="background-color: #4267b2;">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand {{ request()->is('home')? 'active' : ''}}" href="{{route('home')}}" style="color:white"><strong style="color:white">Gagonzasbook</strong></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a class="{{ request()->is('userface')? 'active' : ''}}" href="{{ route('userFace', auth()->user()->id) }}" style="color:white">Perfil de {{auth()->user()->name}}</a></li>
				<li><a href="{{ route('addFriend',auth()->user()->name) }}" style="color:white">Agregar amigos</a></li>
				
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
				<a href="{{ route('notifications.index') }}" style="color:white">
				Notificaciones 

				@if ($count = Auth::user()->unreadNotifications->count())

				    <span class="badge">{{$count}}</span>

                @endif
				</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" style="color:white" data-toggle="dropdown" id="dropdownMenu">{{auth()->user()->name}} <b class="caret"></b></a>
					<ul class="dropdown-menu" style="background-color:#4267b2">
						@if(auth()->check())
                      <li><a href="/logout" style="color:white">Cerrar sesión de {{auth()->user()->name}}</a></li>
				        @endif
						<li><a href="{{ route('editFace',auth()->user()->id) }}" style="color:white">Editar perfil de {{auth()->user()->name}}</a></li>
						
					</ul>
				</li>
			</ul>			
		</div><!-- /.navbar-collapse -->
	</div>
</nav>



</section>


<script src="/js/app.js"></script>
<script src="/js/swODS0dzO2mQM2IN09chSampHGI.js"></script>
<script src="/js/jquery-3.3.1.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>


@yield('contenidoHome')


<footer id="footer" style="height: 200px" class="container-fluid text-center"><p style="color:white">Gabriel González Segura <br>
Copyright ©{{date('Y')}}</p></footer>

</body>
</html>