<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Albums;

class AlbumsController extends AdminController
{
     /**
     * Show all albums page.
     * @return object
     */
    public function index(){
        $albums = Albums::all();
        return view('admin.albums.all', ['albums' => $albums]);
    }

    public function create(){
        return view('admin.albums.create');
    }

    /**
     * Save album
     * @param object $request
     * @return redirect
     */
    public function store(Request $request){
        $albums = new Albums;
        $albums->fill($request->all());
        $albums->save();
        
        return redirect(route('admin.albums.index'));
    }

      /**
     * Edit album
     * @param object $request
     * @return redirect
     */
    public function edit($id)
    {
        $album = Albums::findOrFail($id);
        return view('admin.albums.edit', ['album' => $album]);
    }

    public function update(Request $request, Albums $album)
    {
        $album->update($request->all());
       return redirect(route('admin.albums.index'));
    }

    public function destroy(Albums $album)
    {
        $album->delete();
        return redirect(route('admin.albums.index'));
    }

     /**
     * Show album.
     * @param int $id
     * @return Response
     */
    public function show($id){
        $album = Albums::findOrFail($id);
        return view('admin.albums.view', ['album' => $album]);
    }
}
