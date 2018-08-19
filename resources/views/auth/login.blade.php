@extends('layoutLogin')

@section('contenido')

<section id="two" class="wrapper style2" style="height:500px;">
<h1>Login</h1>



@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if(auth()->guest())

   <h1>Ingrese a nuestra red para compartir con sus amigos y familiares</h1>

@endif

<form method="post" action="/login" class="form-inline">
{!! csrf_field() !!}



<input class="form-control" type="email" name="email" value="" placeholder="Correo">



<input class="form-control" type="password" name="password" value="" placeholder="Password">


<input class="btn btn-success" type="submit" name="Entrar" value="Entrar">

</form>
</section>






@stop
