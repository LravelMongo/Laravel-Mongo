<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AvtarController extends Controller 
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
        $pathToFile = $request->file;
        $newsItem = User::find(1);

        $newsItem
        ->addMedia($request->file)
           ->toMediaCollection('avtaar');

        $mediaItems = $newsItem->getMedia('avtaar'); // To retrieve files of default collection name
        // $mediaItems = $newsItem->getMedia('avtaar'); // To retrieve files of collection name avtaar
        // dd($mediaItems);
        $fullPathOnDisk = $mediaItems[0]->getPath();
        $fullPathOnDiskOfThumbNail = $mediaItems[0]->getPath('thumb');
        $publicUrl = $mediaItems[0]->getUrl();
        // dd($mediaItems->toArray());
        dd($publicUrl);
        dd($fullPathOnDisk);



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
