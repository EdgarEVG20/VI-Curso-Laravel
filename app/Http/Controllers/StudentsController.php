<?php

namespace App\Http\Controllers;

use App\Models\Students;
use datatables;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function main() {
        return view('app.modules.students.main');
    }

    public function table() {
        return datatables()->eloquent(Students::query())->toJson();
    }
    
    public function create() {
        return true;
    }

    public function update() {
        return true;
    }

    public function delete() {
        return true;
    }
}
