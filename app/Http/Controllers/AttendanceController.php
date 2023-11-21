<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uc;
use App\Models\Class;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function showForm($uc_id, $class_id)
    {
        // Lógica para exibir o formulário de presenças
        $uc = Uc::find($uc_id);
        $class = Class::find($class_id);

        return view('attendance.form', compact('uc', 'class'));
    }

    public function processForm($uc_id, $class_id, Request $request)
    {
        // Lógica para processar o envio do formulário de presenças
        $attendance = new Attendance([
            'class_id' => $class_id,
            'student_id' => $request->input('student_id'),
            'state' => $request->input('state'),
        ]);

        $attendance->save();

        return redirect()->route('attendance.show', ['uc_id' => $uc_id, 'class_id' => $class_id]);
    }

    public function showAttendanceList($uc_id, $class_id)
    {
        // Lógica para exibir a listagem de presenças
        $uc = Uc::find($uc_id);
        $class = Class::find($class_id);
        $attendances = Attendance::where('class_id', $class_id)->get();

        return view('attendance.list', compact('uc', 'class', 'attendances'));
    }
}
