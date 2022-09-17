<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LendsController extends Controller
{
    public function main() {
        return view('app.modules.lends.main');
    }
}
