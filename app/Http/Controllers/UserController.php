<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\FaceUser;
use App\VisitUserface;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $request)
    {  
        $user = new User;
        $user->name = e($request->input('name'));
        $user->email = e($request->input('email'));
        $user->password = e(bcrypt($request->input('password')));

        

        if($user->save() == 1)
        {
            $users = User::where('email','=',$request->input('email'))->get();

            foreach($users as $user)
            {
                $id = $user->id;
                $faceuser = new FaceUser;
                $faceuser->id_face = $id;
                $faceuser->avatar = 'public/sinfoto.jpg';
                $faceuser->save();

                $visituserface = new VisitUserface;
                $visituserface->id_user = $id;
                $visituserface->visituserface_counter = 0;
                $visituserface->save();
                
            }

            return redirect('login')->with('status', 'Usuario agregado!!');
            
        }
    }


                             
        

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
