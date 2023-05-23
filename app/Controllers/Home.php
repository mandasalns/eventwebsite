<?php

namespace App\Controllers;

class Home extends BaseController
{
    //main function --> fungsi main
    public function index()
    {
        return view('home');
    } 
}