<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Publication;
use Illuminate\Support\Facades\DB;
use App\FaceUser;
use App\User;
use App\VisitUserface;
use App\FriendFace;
use App\Notifications\VisitNotify;
use Illuminate\Notifications\DatabaseNotification;
use Exception;


class PagesController extends Controller
{
     use AuthenticatesUsers;


     public function showUserForm()
     {
     	  return view('newUser'); 
     }

     public function home()
     {
     	  $id = auth()->user()->id;

     	  $publications = DB::table('publications_users')
            ->join('users', 'id_user', '=', 'id')
            ->join('face_user', 'id_face', '=','id_user')
            ->select('publications_users.*', 'users.name', 'publications_users.publication_text','face_user.avatar','publications_users.fecha_publ')
            ->where('users.id',$id)
            ->get();

        $friendpublications = DB::table('publications_users')
        ->join('users', 'id', '=', 'id_user')
        ->join('face_user', 'id_face','=','id_user')
        ->join('friendsfacesusers','id_facefriend', '=','id_face')
        ->select('publications_users.*', 'users.name', 'publications_users.publication_text','face_user.avatar','publications_users.fecha_publ','friendsfacesusers.id_facefriend','friendsfacesusers.user_id')
        ->where('friendsfacesusers.user_id',$id)
        ->get();      
        
     	  return view('home',compact('publications','friendpublications'));
     }

     public function userface()
     {

     	$id = auth()->user()->id;

     	$faceUser = FaceUser::where('id_face',$id)->with('user')->get();

      $publications = DB::table('publications_users')
            ->join('users', 'id_user', '=', 'id')
            ->join('face_user', 'id_face', '=','id_user')
            ->select('publications_users.*', 'users.name', 'publications_users.publication_text','face_user.avatar','publications_users.fecha_publ')
            ->where('users.id',$id)
            ->get();

      $friends = FriendFace::where('user_id',$id)->paginate(10);
      
      
      $counter = VisitUserface::find($id)->where('id_user',$id)->get();

     	return view('userface',compact('faceUser','id','publications','counter','friends'));

     }

     public function enviadoSuccess()
     {
     	view('enviadoPub');
     	return redirect('home');

     }

     public function editFace()
     {
     	$id = auth()->user()->id;

     	$editFaces = DB::table('face_user')
            ->join('users', 'id_face', '=', 'id')
            ->where('id_face','=', $id)
            ->select('face_user.*')
            ->get();

     	if($id != auth()->user()->id)
     	{
     		return view('login'); 
     	}
          return view('editface',compact('editFaces'))->with('id',$id);
     }

     public function addFriendPage($username)
     {
     	if($username != auth()->user()->name)
     	{
     		return null;
     	}

     	return view('addfriend', compact('username'));

     }

     public function faceFriend($id)
     {
          $users = User::where('id', '!=', $id)->first();

          

          foreach($users->followers as $follower)
          {
          	  $friend_id = $follower->id;

          	  if($id == $friend_id)
          	  {
                  $getFriend_id = $friend_id;

                  $faceUser = FaceUser::where('id_face',$getFriend_id)->with('user')->get();

                  $publications = DB::table('publications_users')
                  ->join('users', 'id_user', '=', 'id')
                  ->join('face_user', 'id_face', '=','id_user')
                  ->select('publications_users.*', 'users.name', 'publications_users.publication_text','face_user.avatar','publications_users.fecha_publ')
                  ->where('users.id',$getFriend_id)
                  ->get();     
                  
                  $id = $getFriend_id;

                  $countVisitSum = VisitUserface::find($getFriend_id);
                  $friends = FriendFace::where('user_id',$id)->get();
                  $countVisitSum->visituserface_counter = $countVisitSum->visituserface_counter + 1;

                  $countVisitSum->save();

                  $counter2 = VisitUserface::find($getFriend_id)->where('id_user',$getFriend_id)->get(); 
                  
                  $receiver = User::find($getFriend_id);

                  $sender = User::with('faceuser')->where('id',auth()->user()->id)->get();

                  foreach($sender as $s)
                  {
                      $avatarSender = $s->faceuser->avatar;
                  }
        
                  $message = "El usuario ".auth()->user()->name." ha revisado tu perfil";

                  $id_follower = auth()->user()->id;

                  $id_followed = $getFriend_id;
        
                  $receiver->notify(new VisitNotify($message,$id_follower,$id_followed,$avatarSender));
             

     	          return view('userface',compact('faceUser','id','publications','counter2','friends'));

          	  }
          }          

     }


}

