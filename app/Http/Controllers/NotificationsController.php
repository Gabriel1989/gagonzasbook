<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use App\ConfirmFriendsNoty;

class NotificationsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$unreadNotifications = auth()->user()->unreadNotifications; 
    	$readNotifications = auth()->user()->readNotifications;

    	return view('notifications.index', compact('unreadNotifications', 'readNotifications'));
    }

    public function destroy($id)
    {
    	DatabaseNotification::find($id)->delete();
    	return back()->with('flash','Notificación eliminada');
    }

    public function destroyfriendrequest(Request $request)
    {
        DatabaseNotification::find($request->id_noty)->delete();
        ConfirmFriendsNoty::where('id_user_follower', $request->follower_id)->where('id_user_followed', $request->followed_id)->delete();
        return back()->with('flash','Solicitud rechazada');
    }

}
