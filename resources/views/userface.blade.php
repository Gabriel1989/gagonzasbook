@extends('homeLayout')


@section('contenidoHome')





<section id="two" class="wrapper style2">
<div class="inner">
<div class="box">
<div class="content">

<div class="container-fluid">
  <div class="row">
  <div class="col-6 col-md-4">
  
  @foreach($faceUser as $face)
  	<div class="panel panel-default" style="width: 100%;">
  	<div class="panel-heading">
    <h3 class="panel-title"><span></span><strong> {{ $face->user->name }} </strong></h3>
   </div>
  		<div class="panel-body">
  	     <img class="img-responsive" src="{{Storage::url($face->avatar)}}" width="400" height="400">
  	     <br>
  	     <label>Situación sentimental</label>
  	     <p>{{$face->love_situation}}</p>
  	     <label>Descripción sobre ti</label>
  	     <p>{{$face->face_info}}</p>
  	     <label>Fecha de cumpleaños</label>
  	     <p>{{$face->birthday}}</p>
  	     <label>Teléfono</label>
  	     <p>{{$face->telephone}}</p>
  	     <label>Lugar de residencia</label>
  	     <p>{{$face->living_place}}</p>
  	     <label>Sexo</label>
  	     <p>{{$face->gender}}</p>
  	     <label>Hobbies</label>
  	     <p>{{$face->hobbies}}</p>

  	     @if(isset($counter))
         
  	     @foreach($counter as $count)
  	     
  	     
  	     <label>Cantidad de visitas</label>
  	     <p>{{$count->visituserface_counter}}</p>
  	     @endforeach
  	     @endif
         
         @if(isset($counter2))

         @foreach($counter2 as $count)
         <label>Cantidad de visitas</label>
  	     <p>{{$count->visituserface_counter}}</p>
  	     @endforeach

  	     @endif
         <hr>
         <label>Lista de amigos</label>
         <table id="example" class="display">
            <thead>
              <tr>
                <th>Amigos</th>
              </tr>
            </thead>
            <tbody>
         @foreach($friends as $friend)
         @if($friend->id_facefriend == auth()->user()->id)
            @continue
         @endif
         
            
              <tr>
                <td><img src="{{Storage::url($friend->faceuser->avatar)}}" width="50" height="50" class="img-circle img-responsive"><strong><a href="{{(route('friends.face',$friend->id_facefriend))}}">{{ $friend->faceuser->user->name}}</a></strong></img></td>
              </tr>
            
         @endforeach
         {!! $friends->links() !!}
            </tbody>
         
  	     </table>

  	     
  	     

  		</div>
  	</div>
  	@endforeach
  </div>

  <div class="col-sm-8">
@forelse($publications as $publication)

    
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span><img src="{{ Storage::url($publication->avatar) }}" class="img-circle" width="100" height="100"></span><strong> {{ $publication->name }} </strong></h3>
    <span>{{$publication->fecha_publ}}</span>
  </div>
  <div class="panel-body">

    {!! $publication->publication_text !!}

    @if(isset($publication->url_image_publication))

    <img width="100%" class="img-responsive" src="{{ Storage::url($publication->url_image_publication) }}">

    @endif

  </div>
</div>

@empty
      <div class="alert alert-info">
      	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      	<strong>Lo sentimos:</strong> Aún no tienes publicaciones tuyas
      </div>

@endforelse
  	

  </div>
  <!--<div class="col-6 col-md-4">.col-6 .col-md-4</div>-->
  </div>
</div>



</div>
</div>
</div>
</section>




@stop





