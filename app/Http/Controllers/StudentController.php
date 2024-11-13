<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
//
class StudentController extends Controller
{
   
    public function index()
    {
        $usernames = Student::all();
        return view('index',['usernames'=>$usernames]);
        
    }

    public function index2()
    {
        $usernames = Student::all();
        return view('delete',['usernames'=>$usernames]);
        
    }

    public function store(Request $request)
    {
        Student::create([
            'username'=>$request->username,
            'age'=>$request->age,
            'classname'=>$request->classname]);
            return redirect()->back();
    }

   
    public function update(Request $request, Student $student)
    {
        $student->update();
        return redirect()->back();
    }


    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->back();
    }
}
