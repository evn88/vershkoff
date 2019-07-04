<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Albums;


class AlbumsController extends Controller
{
     /**
     * Show all albums page.
     * @return object
     */
    public function getAll(){
        return Albums::all();
    }

}
