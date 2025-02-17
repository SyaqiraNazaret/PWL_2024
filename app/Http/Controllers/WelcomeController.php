<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\TextUI\Configuration\SourceFilter;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }
    public function greeting() {
        return view('blog.hello') 
        ->with('name' ,'Syaqira N.')
        ->with('occupation','Astranaut');
    }
}
    


