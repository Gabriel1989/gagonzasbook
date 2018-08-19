<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\ChatComment;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use Illuminate\Events\Dispatcher;
use App\Events\MessageChatReceived;

class ChatController extends Controller
{
    public function mostrarChat()
    {   
    	$key = "chat.comments.2JzjVs5fTtdlDKlgo8eXzzvrgZui8zulo6j59oMc";
    	$comments = Cache::rememberForever($key, function(){
    		return ChatComment::orderBy('created_at','ASC')->get();
    	});
    	/*$commentsDB = ChatComment::orderBy('created_at','ASC')->get();
    	$comments = Redis::get($key,$commentsDB);*/
    	return view('chat',compact('comments'));
    }

    public function insertarComentario(Request $request)
    {
    	if($request->txtComentario !== null)
    	{		
    		$comentario = new ChatComment();
    		$comentario->nickname = $request->nickname;
    		$comentario->text_comment = $request->txtComentario;
    		$comentario->save();
    		event(new MessageChatReceived($comentario));
    	}
    	else if($request->imgComentario != null)
    	{
    		$extension = $request->imgComentario->getClientOriginalExtension();	
    		if($extension == 'jpg' || $extension == 'png' || $extension == 'gif')
    		{
    			$comentarioimg = new ChatComment();
    			$comentarioimg->nickname = $request->nickname;
    			$comentarioimg->meme_comment = $request->imgComentario->store('public');
    			$comentarioimg->save();
    			event(new MessageChatReceived($comentarioimg));
    		}
    		else
    		{
    			return false;
    		}    		
    	}
    	else if($request->vidComentario != null){

    		$extension = $request->vidComentario->getClientOriginalExtension();
    		if($extension == 'mp4' || $extension == 'avi' || $extension == 'mpeg' || $extension == 'ogg')
    		{
    			$comentariovid = new ChatComment();
    			$comentariovid->nickname = $request->nickname;
				$comentariovid->video_comment = $request->vidComentario->store('public');
				$comentariovid->save();
    			event(new MessageChatReceived($comentariovid));
    		}
    		else
    		{
    			return false;
    		}
    		
    	}
    	Cache::flush();
    }

}
