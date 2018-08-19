@extends('homeLayout')

@section('contenidoHome')


<section id="two" class="wrapper style2">
<div class="inner">
<div class="box">
<div class="content"> 

<h1 style="font-size: 40px">Notificaciones</h1>

<div class="row">
    <div class="col-md-6">
    	<h2>No leídas</h2>
    	@foreach($unreadNotifications as $unreadNotification)
            <li class="list-group-item">
            @if($unreadNotification->type == 'App\Notifications\VisitNotify')
                <img src="{{Storage::url($unreadNotification->data['avatarSender'])}}" width="200" height="200" class="img-responsive"></img>
            {{ $unreadNotification->data['message'] }}
            <form method="post" 
            action="{{ route('notifications.destroy',$unreadNotification->id)}}">
                {{csrf_field()}}
                
                <button type="submit" class="btn btn-danger btn-xs">X</button>
            </form>
            </li>

            @else
            

            <img src="{{Storage::url($unreadNotification->data['avatarSender'])}}" width="200" height="200" class="img-responsive"></img>
            {{ $unreadNotification->data['message'] }}
            <form method="post" action="{{route('friendship.confirm')}}">
                {{csrf_field()}}
                <input type="hidden" name="follower_id" value="{{$unreadNotification->data['id_follower']}}">
                <input type="hidden" name="followed_id" value="{{auth()->user()->id}}">
                <input type="hidden" name="id_noty" value="{{$unreadNotification->id}}">
            	<button type="submit" class="btn btn-success btn-xs">Confirmar amistad</button>
            </form>
            <form method="post" action="{{route('friendship.rejectfriendrequest')}}">
                {{csrf_field()}}
                <input type="hidden" name="follower_id" value="{{$unreadNotification->data['id_follower']}}">
                <input type="hidden" name="followed_id" value="{{auth()->user()->id}}">
                <input type="hidden" name="id_noty" value="{{$unreadNotification->id}}">
                <button type="submit" class="btn btn-success btn-xs">Eliminar solicitud</button>
            </form>
            </li>
            @endif

    	@endforeach
    </div>

    <div class="col-md-6">
    	<h2>Leídas</h2>
    	@foreach($readNotifications as $readNotification)


            <li class="list-group-item"><img src="{{Storage::url($readNotification->data['avatarSender'])}}" width="200" height="200" class="img-responsive"></img>
            {{ $readNotification->data['message'] }}

            <form method="post" 
            action="{{ route('notifications.destroy',$readNotification->id)}}">
                {{csrf_field()}}
                
            	<button type="submit" class="btn btn-danger btn-xs">X</button>
            </form>

            </li>


    	@endforeach
    </div>
</div>

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