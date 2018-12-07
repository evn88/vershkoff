<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Albums;

class AlbumsController extends AdminController
{
     /**
     * Show all albums page.
     *
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
        
        return redirect(route('admin.albums'));
        // return view('admin.albums.create', compact(['test']));
    }

     /**
     * Show album.
     * @param int $id
     * @return Response
     */
    public function show($id){
        return view('admin.albums.view', ['photos' => '']);
    }
}
