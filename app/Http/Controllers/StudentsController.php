<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function main() {
        return view('app.modules.students.main');
    }
}
