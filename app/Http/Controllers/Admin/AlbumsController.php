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

    public function create(){
        return view('admin.albums.create');
    }

    public function store(){
        $test = "SAVED!!!";
        return view('admin.albums.create', compact(['test']));
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
