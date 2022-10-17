<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120183,
            'Nama' => 'Raihan Ahmad Hafizh',
            'Phone' => '082329329714',
            'Class' => 'XII RPL 6'
        ];
    }
}
