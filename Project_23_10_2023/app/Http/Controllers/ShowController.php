<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function Show(){
        return 'Kontroler ShowController';
    }

    public function showView(){
        $users = [
            'imie' => 'Janusz',
            'nazwisko' => 'Nowak',
            'miasto' => 'Poznan',
            'hobby' => [
                'siatkowka', 'skoki narciarskie', 'piłka ręczna', 'żużel'
            ]
        ];
        return View('users', $users);
    }

    public function showArray(){
        $users = [
            'imie' => 'Janusz',
            'nazwisko' => 'Nowak',
            'miasto' => 'Poznan',
            'hobby' => [
                'siatkowka', 'skoki narciarskie', 'piłka ręczna', 'żużel'
            ]
        ];
        return View('usersArray', ['users' => $users]);
    }
}
