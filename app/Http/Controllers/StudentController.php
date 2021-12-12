<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentpostRequest;


class StudentController extends Controller
{
   
    public function index()
    {
        //
    }

  
    public function create()
    {
        return view('student/create');
    }

   
    public function store(StudentpostRequest $request)
    {
       
        Student::create($request->all());
        return back();

    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
