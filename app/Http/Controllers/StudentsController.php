<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Mail\StudentsMail;
use App\Models\Lends;
use App\Models\Students;
use datatables;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

    public function get_data(Request $request) {
        $id = $request->ID;/* Cachamos los parametros de axios */
        $students = Students::where('id', $id)->get();/* Obtenemos el registro solicitado */

        return response()->json($students);/* Devolvemos la información del estudiante */
    }

    public function update(Request $request) {
        // dd($request->all());
        $student = Students::findOrFail($request->id);

        $student->name = $request->name;
        $student->age = $request->age;
        $student->num = $request->num;
        $student->grade = $request->grade;
        $student->group = $request->group;
        $student->save();
        // return true;
        return redirect()->back();
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
        // $data = Students::query()->get()->toArray();
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

    public function pdf() {
        // return true;

        // $student = Students::where('id', 10)->get();
        $student = Students::query()->get();

        $pdf = \PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('app.pdf.students', ['data' => $student])->setPaper('legal', 'portrait');
        //$pdf = \PDF::loadHtml($html)->setPaper('letter','landscape')->setPaper('legal', 'portrait');

        $pdf->output();
        $dom_pdf = $pdf->getDomPDF();

        $canvas = $dom_pdf ->get_canvas();
        $canvas->page_text(540, 980, "Pagina {PAGE_NUM} de {PAGE_COUNT}", null, 10, array(0, 0, 0));
        $canvas->page_text(10, 10, "Folio: " . 10, null, 10, array(0, 0, 0));

        return $pdf->stream('PDF.pdf');
    }

    public function email() {
        $students = Students::where('id', 10)->get();
        Mail::to('cliente@gmail.com')->send(new StudentsMail($students));

        if (count(Mail::failures()) !== 0) {
            return "Fail";
        } else {
            return "Success";
        }
    }
}
