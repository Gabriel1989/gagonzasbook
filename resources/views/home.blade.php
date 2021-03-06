@extends('homeLayout')


@section('contenidoHome')

@if(auth()->guest())

   <h1>Ingrese a nuestra red para compartir con sus amigos y familiares</h1>

@endif



<section id="two" class="wrapper style2">
<div class="inner">
<div class="box">
<div class="content">

<h1 style="font-size: 30px">¡Bienvenido a Gagonzasbook!</h1>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<h1>Comparte algo con tus amigos</h1>
<form method="post" action="/home" class="form-horizontal" enctype="multipart/form-data">
{!! csrf_field() !!}

<textarea class="form-control" name="publication" value="{!!old('publication')!!}" placeholder="Comparte algo">
{!!$errors->first('publication','<span class=error>:message</span>')!!}
</textarea>

<input type="hidden" name="id_user" value="{{ auth()->user()->id }}">


<br>

<p><label for="image_publication">Ingrese imagen o foto a publicar :)<input type="file" name="image_publication" class="form-control-file"></label></p>



<button class="btn btn-success" type="submit" name="Registrar">Registrar publicación</button>

</form>





@forelse($publications as $publication)

<div class="container-fluid">
<div class="col-lg-9">    
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span><img src="{{ Storage::url($publication->avatar) }}" class="img-circle" width="100" height="100"></span><strong> {{ $publication->name }} </strong></h3>
    <span>{{$publication->fecha_publ}}</span>
  </div>
  <div class="panel-body">

    
    {!!$publication->publication_text!!}

    @if(isset($publication->url_image_publication))

    <img width="100%" class="img-responsive" src="{{ Storage::url($publication->url_image_publication) }}">

    @endif

  </div>
</div>
</div>
</div>

@empty
      <div class="alert alert-info">
      	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      	<strong>Lo sentimos:</strong> Aún no tienes publicaciones tuyas
      </div>

@endforelse


@forelse($friendpublications as $fpublication)

@if($fpublication->id_facefriend == auth()->user()->id)
  @continue
@endif   
<div class="container-fluid center-block">
<div class="col-lg-9">     
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span><img src="{{ Storage::url($fpublication->avatar) }}" class="img-circle" width="100" height="100"></span><strong><a href="{{(route('friends.face',$fpublication->id_facefriend))}}">{{ $fpublication->name }} </a></strong></h3>
    <span>{{$fpublication->fecha_publ}}</span>
  </div>
  <div class="panel-body">

   {!!$fpublication->publication_text!!}

    @if(isset($fpublication->url_image_publication))

    <img width="100%" class="img-responsive" src="{{ Storage::url($fpublication->url_image_publication) }}">

    @endif

  </div>
</div>
</div>
</div>

@empty
      <div class="alert alert-info">
      	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      	<strong>Lo sentimos:</strong> Aún no tienes publicaciones de amigos, intenta buscarlos para tener novedades de ellos.
      </div>

@endforelse

</div>
</div>
</div>

</section>

@stop