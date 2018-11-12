<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    //
    public function getPersonalInfo($id) {
        return view('personal.getPersonalInfo',compact('id'));
    }
}
