<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumsController extends AdminController
{
     /**
     * Show all albums page.
     *
     * @return Response
     */
    public function index(){
        return view('admin.albums.all', ['albums' => 'test']);
    }

     /**
     * Show album.
     * @param int $id
     * @return Response
     */
    public function showAlbum($id){
        return view('admin.albums.view', ['photos' => Photos::findOrFail($id)]);
    }
}
