<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();
        return view('pages.afficheForeachFile', compact('files'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = File::all();
        return view('pages.afficheAddFileAdmin', compact('files'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new File();
        $store->src = $request->file('src')->hashName();
        Storage::put('public', $request->file('src'));
        $store->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        return view('pages.afficheEditImage', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        Storage::delete('public/'.$file->src);
        $file->src = $request->file('src')->hashName();
        Storage::put('public/', $request->file('src'));
        $file->save();
        return redirect('/file/'.$file->id.'/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        Storage::delete('pubic/'.$file->src);
        $file->delete();
        return redirect('/admin');
    }

    public function archived ($id) {
        $file = File::find($id);
        $file->archived = !$file->archived;
        $file->save();
        return redirect('/image');
    }


}
