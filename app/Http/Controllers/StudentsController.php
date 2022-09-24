<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Lends;
use App\Models\Students;
use datatables;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
    public function main() {
        return view('app.modules.students.main');
    }

    public function table() {
        return datatables()->eloquent(Students::query())->toJson();
    }
    
    public function add(StudentRequest $request) {
        // dd($request->all());

        // $V = Validator::make($request->all(), $this->rules(), $this->messages());

        // if ($V->fails()) {
        //     // return redirect()->back();
        //     return redirect()->back()->withErrors($V->errors())->withInput()->with('status-students', 'error');
        // }

        $request->validated();

        // $user = new Students();
        // $user->name = $request->name;
        // $user->age = $request->age;
        // $user->num = $request->num;
        // $user->grade = $request->grade;
        // $user->group = $request->group;
        // $user->save();

        // Students::create([
        //     'name' => $request->name,
        //     'age' => $request->age,
        //     'num' => $request->num,
        //     'grade' => $request->grade,
        //     'group' => $request->group,
        // ]);

        Students::create($request->all());

        return redirect()->back()->with('status-students', 'success');
        
    }

    public function update() {
        return true;
    }

    public function delete() {
        return true;
    }
    public function rules() {
        return [
            'name' => 'required',
            'age' => 'required',
            'num' => 'required',
            'grade' => 'required',
            'group' => 'required',
        ];
    }
    public function messages() {
        return [
            'name.required' => 'Este campo nombre es requerido',
        ];
    }
    public function test() {
        /* Consultar información de la base de datos SELECT */
        // $data = Students::query()->get();

        /* Mostrar datos que no han sido eliminados */
        $data = Students::query()->get()->toArray();
        /* Mostrar datos que también han sido eliminados */
        $data = Students::query()->withTrashed()->get()->toArray();

        // $data = Students::select(['name'])->get()->toArray();
        
        // $data = Students::select(['name', 'grade', 'group'])
        // ->where('grade', 1)
        // ->where('group', 'A')
        // ->get()
        // ->toArray();

        // $data = Students::selectRAW('COUNT(id), grade')
        // ->where('grade', 1)
        // ->groupBy('grade')
        // ->get()
        // ->toArray();

        // $data = Lends::selectRAW('students.name, books.title, lends.deadline')
        // ->join('students', 'students.id', '=', 'lends.id_student')
        // ->join('books', 'books.id', '=', 'lends.id_book')
        // ->get()
        // ->toArray();

        /* Actualizar información de la base de datos UPDATE */
        // $data = Students::where('id', 1)->update([
        //     'name' => 'Edgar Eduardo',
        //     'age' => 22,
        //     'num' => 123456798,
        //     'grade' => 11,
        //     'group' => 'A'
        // ]);

        // $data = Students::findOrFail(2);
        // $data->name = "Perlita";
        // $data->age = 20;
        // $data->num = 111111111;
        // $data->grade = 10;
        // $data->group = "A";
        // $data->save();

        /* Eliminar información de la base de datos DELETE */
        // $id = 100;
        // $data = Students::where('id', 100)->delete();

        $data = Students::whereIn('id', [1, 2, 3])->delete();

        // $data = Students::where([
        //     'campo', '=', 'dato',
        //     'campo', '=', 'dato',
        //     'campo', '=', 'dato',
        // ])->delete();

        dd($data);

        return true;
    }
}
