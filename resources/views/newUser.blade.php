@extends('layoutLogin')


@section('contenido')
<section id="two" class="wrapper style2" style="height:500px;">

<div class="col-sm-6 login-panel panel panel-default" style="background-color: cyan; text-align:center">
<h1>Formulario de registro de usuarios</h1>
<form method="post" action="/formUsuario" class="form-horizontal">
{!! csrf_field() !!}

<div class="form-group">
<input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="Ingrese nombre">
{!!$errors->first('name','<span class=error>:message</span>')!!}
</div>

<div class="form-group">
<input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="Correo">
{!!$errors->first('email','<span class=error>:message</span>')!!}
</div>

<div class="form-group">
<input class="form-control" type="text" name="password" value="{{old('password')}}" placeholder="Password">
{!!$errors->first('password','<span class=error>:message</span>')!!}
</div>

<button class="btn btn-success" type="submit" name="Registrar">Registrar Usuario</button>

</form>

</div>

</section>

@stop