<?php

namespace App\Http\Controllers;

use App\FaceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FaceUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $id = auth()->user()->id;

        
        

        return view('editface')->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $idAuth = auth()->user()->id;

        $idUser = DB::table('face_user')
                  ->where('id_face','=', $idAuth)
                  ->select('id_face')
                  ->get();

        $idUserFace = 'null';

        foreach($idUser as $id)
        {

           $idUserFace = $id->id_face;
           
           
        }       

        if($idUserFace == 'null') //Si es inserción de datos
        {
            $faceuser = new FaceUser;
            $faceuser->love_situation = e($request->input('love_situation'));
            $faceuser->face_info = e($request->input('face_info'));
            $faceuser->birthday = e($request->input('birthday'));
            $faceuser->telephone = e($request->input('telephone'));
            $faceuser->living_place = e($request->input('living_place'));
            $faceuser->gender = e($request->input('gender'));
            $faceuser->hobbies = e($request->input('hobbies'));
            $faceuser->id_face = $idAuth;
            $faceuser->avatar = $request->file('avatar')->store('public');

               if($faceuser->save() == 1)
               {
            
                     return redirect('home')->with('status', 'Datos de perfil agregados exitosamente');
            
               }
        }
        else{
            
        //Actualizamos los datos de perfil  
            $dataRequest = $request->all();

            if(!empty($request->file('avatar')))
            {

            //Si hay una foto de perfil incluida en el request, actualizamos todo, incluida la foto de perfil 
                $faceUser = DB::table('face_user')
                        ->where('id_face', $idAuth)
                        ->update(['love_situation'=> e($request->input('love_situation')), 'face_info' => e($request->input('face_info')), 'birthday' => e($request->input('birthday')), 'telephone' => e($request->input('telephone')), 'living_place' => e($request->input('living_place')), 'gender' => e($request->input('gender')), 'hobbies' => e($request->input('hobbies')), 'avatar' => $request->file('avatar')->store('public')]);

               if($faceUser != null)
               {


                    if($faceUser == 1)
                    {
            
                       return redirect('home')->with('status', 'Datos de perfil actualizados exitosamente');
            
                    }
               }   

            }else{
            //Si no hay foto a actualizar, actualizamos todo menos la foto de perfil
                $faceUser2 = DB::table('face_user')
                        ->where('id_face', $idAuth)
                        ->update(['love_situation'=> e($request->input('love_situation')), 'face_info' => e($request->input('face_info')), 'birthday' => e($request->input('birthday')), 'telephone' => e($request->input('telephone')), 'living_place' => e($request->input('living_place')), 'gender' => e($request->input('gender')), 'hobbies' => e($request->input('hobbies'))]);   

                         if($faceUser2 == 1 && $faceUser2 != null)
                         {

                               return redirect('home')->with('status', 'Datos de perfil actualizados exitosamente');
                         }

            }
                    
            
           
               
                     
               

        }

        return redirect('home')->with('status', 'Lo sentimos, no pudimos actualizar sus datos. Inténtelo más tarde');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FaceUser  $faceUser
     * @return \Illuminate\Http\Response
     */
    public function show(FaceUser $faceUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FaceUser  $faceUser
     * @return \Illuminate\Http\Response
     */
    public function edit(FaceUser $faceUser)
    {
        $faceUser->$id_face = auth()->user()->id;

        
        

        return view('editface')->with('id', $id);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FaceUser  $faceUser
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FaceUser  $faceUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaceUser $faceUser)
    {
        //
    }
}
