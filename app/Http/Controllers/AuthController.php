<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form() {
        return view("form");
    }

    public function welcome() {
        return view("welcome");
    }

    public function form_post(Request $request) {
        $awal = $request['awal'];
        $akhir = $request['akhir'];
        return view("welcome" , ['awal' => $awal , 'akhir' => $akhir]);
    }
}
