@extends('layoutLogin')


@section('contenido')
<section id="two" class="wrapper style2" style="height:1200px;">

<div class="col-sm-6 login-panel panel panel-default">
<h1>Chat Gagonzasbook</h1>
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Ingrese mensaje</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        	<form enctype="multipart/form-data" id="formComment" method="post">
        		{{csrf_field()}}
        		<input type="text" name="nickname" placeholder="Ingrese nickname">
        		<div id="tipoComentario"></div> 
                <button id="btntexto" class="btn btn-primary btn-sm" onclick="opcionComentario('texto')">Texto</button>
                <button id="btnimagen" class="btn btn-success btn-sm" onclick="opcionComentario('imagen')">Imagen</button>
                <button id="btnvideo" class="btn btn-info btn-sm" onclick="opcionComentario('video')">Video</button>
                <input type="submit" class="btn btn-danger" id="enviarComentarioChat" name="enviarComentarioChat" value="Enviar comentario" disabled="true">
        	</form>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Leer comentarios</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse in">
        <div class="panel-body" style="overflow: auto;height: 300px;" id="chatpanel">
        	
        	@foreach($comments as $comment)
               @if($comment->text_comment != null)

               		<strong>{{$comment->nickname}}</strong>:<p>{!!$comment->text_comment!!}</p>
               @elseif($comment->meme_comment != null)
               		<strong>{{$comment->nickname}}</strong>:<img src="{{Storage::url($comment->meme_comment)}}" class="img-responsive" style="height:200px;width:200px;">

               @elseif($comment->video_comment != null)
               		<strong>{{$comment->nickname}}</strong>:
               		<video width="320" height="240" controls>
  						<source src="{{Storage::url($comment->video_comment)}}">
					</video>
               @endif
               <br>
        	@endforeach



        </div>
      </div>
    </div>
    
  </div>

</div>	
</section>
<script type="text/javascript">
	function opcionComentario(tipoComent)
	{
		switch(tipoComent)
		{
			case "texto":
            var cajaTexto = "<textarea name='txtComentario'></textarea>";
            $("#tipoComentario").empty();
		    $("#tipoComentario").append(cajaTexto);
		    event.preventDefault();
		    $("#enviarComentarioChat").prop("disabled",null);
		    break;

		    case "imagen":
            var cajaTexto = "<input type='file' name='imgComentario' accept='image/*'>";
            $("#tipoComentario").empty();
		    $("#tipoComentario").append(cajaTexto);
		    event.preventDefault();
		    $("#enviarComentarioChat").prop("disabled",null);
		    break;

		    case "video":
            var cajaTexto = "<input type='file' name='vidComentario' accept='video/*'>";
            $("#tipoComentario").empty();
		    $("#tipoComentario").append(cajaTexto);
		    event.preventDefault();
		    $("#enviarComentarioChat").prop("disabled",null);
		    break;
		}

	}

	$(function(){
        $("#formComment").on("submit", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("formComment"));
            //formData.append(f.attr("name"), $(this)[0].files[0]);
            $.ajax({
                url: "/insertComment",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
	     		processData: false
            })
        });
    });

		/*event.preventDefault();
		$.ajax({
			url: '',
			type: "POST",
			data: $("#formComment").serialize(),
			success: function(data)
			{
				
                
			}
		});*/
	
</script>







@stop