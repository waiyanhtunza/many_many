<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        Student::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password'])
        ]);
    }
}
