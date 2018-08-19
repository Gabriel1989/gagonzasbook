<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', ['as' => 'login', 'uses' =>'Auth\LoginController@showLoginForm']);
Route::get('login', ['as' => 'login', 'uses' =>'Auth\LoginController@showLoginForm']);
Route::post('login','Auth\LoginController@login');
Route::get('formUsuario', ['as' => 'newUser', 'uses' =>'PagesController@showUserForm']);
Route::post('formUsuario','UserController@store');
Route::get('home',['as' => 'home', 'uses' => 'PagesController@home'])->middleware('auth');
Route::get('userFace/{id}',['as' => 'userFace', 'uses' => 'PagesController@userface'])->middleware('auth');
Route::get('logout','Auth\LoginController@logout');
Route::post('home', 'PublicationController@store');
Route::get('enviado',['as'=> 'enviado', 'uses' => 'PagesController@enviadoSuccess'])->middleware('auth');
Route::get('editFace/{id}', ['as' => 'editFace', 'uses' => 'PagesController@editface'])->middleware('auth');
Route::post('editFace', 'FaceUserController@store');
Route::get('addFriend/{username}', ['as'=> 'addFriend', 'uses'=> 'PagesController@addFriendPage'])->middleware('auth');
Route::post('addFriend/friends', 'FriendsController@listFriendsAjax');
Route::post('addFriend/friends/ZLzlbh2UIhfeZ6AkPVT85v', 'FriendsController@addFriendToUser');
Route::get('notificaciones', 'NotificationsController@index')->name('notifications.index');
Route::post('confirmFriendship', 'FriendsController@confirmFriendshipToUser')->name('friendship.confirm');
Route::post('deleteNoty/{id}', 'NotificationsController@destroy')->name('notifications.destroy');
Route::get('friendsFaces/{id}', 'PagesController@faceFriend')->name('friends.face')->middleware('auth','friendship');
Route::post('deleteNoty2','NotificationsController@destroyfriendrequest')->name('friendship.rejectfriendrequest');
Route::get('chat','ChatController@mostrarChat')->name('chat.index');
Route::post('insertComment', 'ChatController@insertarComentario');

