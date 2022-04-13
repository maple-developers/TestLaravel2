<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class teachers_controller extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('index', ['teachers' => $teachers]);
    }

    public function addTeachersForm()
    {
        return view('addTeachersForm');
    }
    public function updateTeacher(Request $request)
    {
        $teachers = Teacher::find($request->id);
        return view('addTeachersForm', ['teachers' => $teachers]);
    }

    public function saveTeacherData(Request $request)
    {
        $validator = $request->validate([
            'teacherName' => 'required',
            'teacherEmail' => 'required',
            'teacherPassword' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
            ],
            'teacherRePassword' => 'required|same:teacherPassword',
        ]);

        $teacher = new Teacher();
        $teacher->name = $request->teacherName;
        $teacher->email = $request->teacherEmail;
        $teacher->password = $request->teacherPassword;
        $teacher->save();
        return redirect('/');
    }
    public function saveUpdateTeacher(Request $request)
    {
        $validator = $request->validate([
            'teacherName' => 'required',
            'teacherEmail' => 'required',
            'teacherPassword' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
            ],

        ]);

        $teacher = Teacher::findOrFail($request->id);
        $teacher->name = $request->teacherName;
        $teacher->email = $request->teacherEmail;
        $teacher->password = $request->teacherPassword;
        $teacher->save();
        return redirect('/');
    }

    public function deleteTeacher(Request $request)
    {
        $teacher = Teacher::find($request->id)->delete();
        return redirect('/');
    }
}
