<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return[ 'nis' => '3103118097',
                'name' => 'nabila',
                'gender' => 'female',
                'phone' => '081226045811',
                'class' => 'XII RPL 3'];
    }
}
