<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    function index(Request $req){
            $id = $req->id;
            return 'Halaman artikel dengan ID ' . $id;
    }
}
