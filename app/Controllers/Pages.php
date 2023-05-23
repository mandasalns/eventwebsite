<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web Programming UNPAS',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    } 

    public function event()
    {
        $data = [
            'title' => 'Event'
        ];
        echo view('layout/header');
        echo view('pages/event', $data);
        echo view('layout/footer');
    }

    public function register()
    {
        $data = [
            'title' => 'Register'
        ];
        echo view('layout/header', $data);
        echo view('pages/register');
        echo view('layout/footer');
    }
}