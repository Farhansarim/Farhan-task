<?php

namespace App\Http\Controllers;

use App\Student;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function show()
    {
        return view('student');
    }

       function addData(Request $request)
        {
            //To  check/validate input field credentials
            $this->validate($request,
                [
                    'name' => 'required',
                    'age' => 'required',
                    'school' => 'required',

                ]);
            $Stdnt = new Student();
            $Stdnt->name = $request->input('name');
            $Stdnt->age = $request->input('age');
            $Stdnt->school = $request->input('school');

            $Stdnt->save();
            return redirect()->back()->with('message', 'ThankYou Your adding info Successfully !');
        }
//    public function index()
//    {
//        $stdnt = Student::all()->toArray();
//
//        return view('StdntRecord', compact('stdnt'));
//    }

    public function index()
    {
        $record=Student::all();
        return view('StdntRecord', ['record'=>$record]);
}
    }

