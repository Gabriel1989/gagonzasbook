<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }



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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'publication' => 'required'
            ]);
        date_default_timezone_set("America/Santiago");
        
        if(empty($request->file('image_publication')))
        {

        

        $publication = new Publication;
        $publication->publication_text = $request->input('publication');
        $publication->id_user = e($request->input('id_user'));
        $publication->fecha_publ = new \DateTime(date("Y-m-d H:i:s"));    

        }
        else{
        
        
        $publication = new Publication;
        $publication->publication_text = $request->input('publication');
        $publication->id_user = e($request->input('id_user'));
        $publication->url_image_publication = $request->file('image_publication')->store('public');
        $publication->fecha_publ = new \DateTime(date("Y-m-d H:i:s"));         

        }
        if($publication->save() == 1)
        {

            
            return redirect()->route('enviado');
            
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        //
    }
}
