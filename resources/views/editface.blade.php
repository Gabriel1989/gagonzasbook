@extends('homeLayout')


@section('contenidoHome')



@if($id != auth()->user()->id)

    <div class="alert">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    	<strong>Forbidden!</strong>Acceso denegado!
    </div>



@else

<section id="two" class="wrapper style2">
<div class="inner">
<div class="box">
<div class="content">

<h1 style="font-size: 30px">Edita tu perfil {{auth()->user()->name}}</h1>

<form action="/editFace" method="post" accept-charset="utf-8" class="form-horizontal" enctype="multipart/form-data">
<fieldset>
{!! csrf_field() !!}



<label for="avatar">Seleccione foto de perfil</label>
<input type="file" name="avatar" class="form-control-file">
<br>
@forelse($editFaces as $editFace)
<label for="love_situation">Situación sentimental</label>

<input type="text" name="love_situation" placeholder="Situación sentimental" value="{{$editFace->love_situation}}">
<br>
<label for="face_info">Añade una descripción sobre ti</label>
<textarea name="face_info" class="form-control">{{$editFace->face_info}}</textarea> 
<br>

<label for="birthday">Indique su fecha de cumpleaños</label>

<input type="date" name="birthday" value="{{$editFace->birthday}}">

<br>
<br>
<label for="telephone">Indique su número de teléfono</label>
<input class="form-control" type="tel" name="telephone" value="{{$editFace->telephone}}">
<br>

<label for="living_place">Lugar de residencia</label>
<input type="text" name="living_place" placeholder="Indique lugar de residencia" value="{{$editFace->living_place}}">	
<br>
<label for="gender">Indique sexo</label>
<select name="gender">
	<option value="Hombre">Hombre</option>
	<option value="Mujer">Mujer</option>
</select>
<br>

<label for="hobbies">Indique intereses o hobbies</label>
<input class="form-control" type="text" name="hobbies" placeholder="Bucear, viajar, etc" value="{{$editFace->hobbies}}">
<br>

<input type="hidden" name="YaX26OAbzEhe6nvQuNWkLlkXy" value="{{auth()->user()->id}}">


@empty
<label for="love_situation">Situación sentimental</label>

<input type="text" name="love_situation" placeholder="Situación sentimental">
<br>
<label for="face_info">Añade una descripción sobre ti</label>
<textarea name="face_info" class="form-control"></textarea> 
<br>

<label for="birthday">Indique su fecha de cumpleaños</label>

<input type="date" name="birthday">

<br>
<br>
<label for="telephone">Indique su número de teléfono</label>
<input class="form-control" type="tel" name="telephone">
<br>

<label for="living_place">Lugar de residencia</label>
<input type="text" name="living_place" placeholder="Indique lugar de residencia">	
<br>
<label for="gender">Indique sexo</label>
<select name="gender">
	<option value="Hombre">Hombre</option>
	<option value="Mujer">Mujer</option>
</select>
<br>

<label for="hobbies">Indique intereses o hobbies</label>
<input class="form-control" type="text" name="hobbies" placeholder="Bucear, viajar, etc">
<br>

<input type="hidden" name="YaX26OAbzEhe6nvQuNWkLlkXy" value="{{auth()->user()->id}}">


@endforelse
<button class="btn btn-success" type="submit">Registrar cambios</button>


</fieldset>

</form>
</div>
</div>
</div>
</section>

@endif



@stop



