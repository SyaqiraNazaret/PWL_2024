<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return 'NIN: 2341760123 <br> Nama: Syaqira Nazaretna';
    }
    public function articles($id){
       return 'Artikel ke-'.$id;
    }
    public function index(){
       return 'Selamat Datang';
    }
}
