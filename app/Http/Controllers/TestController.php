<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function about() {
        $adress='улица Пушкина, 228';
        $data = ['name'=>'Тотя.❤️', 'phone'=>'+7-952-812', 'age' => 25];
        return view('about', compact('adress'), compact('data'));
    }

    public function contacts() {
        return view('contacts');
    }

    public function info() {
        return view('info');
    }

    public function job() {
        return view('job');
    }
}
