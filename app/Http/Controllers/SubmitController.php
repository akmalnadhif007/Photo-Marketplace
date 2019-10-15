<?php

namespace App\Http\Controllers;

use App\Submit;
use App\Event;
use App\Tag;
use App\Upload;
use Illuminate\Http\Request;

class SubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        $tag = Tag::all();
        $photos = Upload::all();
        return view('uploaded-images')->withEvent($event)
                                      ->withTag($tag)
                                      ->withPhotos($photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $submit = new Submit;
        $submit->id_event = $request->id_event;
        $submit->name = $request->name;
        $submit->price = $request->price;
        $submit->deskripsi = $request->deskripsi;

        $submit->save();
        $submit->tag()->sync($request->tag, false);
        $submit->upload()->sync($request->upload, false);
    	return "Data Berhasil Masuk";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
