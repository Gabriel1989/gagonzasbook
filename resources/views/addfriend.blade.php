@extends('homeLayout')


@section('contenidoHome')



  

  
<section id="two" class="wrapper style2">
<div class="inner">
<div class="box">
<div class="content">  	
  <h1 style="font-size: 30px">Consultar amigos por nombre</h1>
  <div class="form-group">
      
   <input type="hidden" id="token" value="{{csrf_token()}}">   
   <input type="text" x-webkit-speech=""  id="buscar_friend" name="buscar_friend" class="form-control" placeholder="Busque por nombre">
  </div>
  <div id="resultado2"></div>

  @if (session()->has('flash'))
  <div class="container">
  	<div class="alert alert-success">{{ session('flash') }}</div>
  </div>
  @endif

</div>
</div>
</div>
</section>

@stop