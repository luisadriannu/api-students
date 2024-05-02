<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;
use App\Models\Student; // Asegúrate de importar el modelo Student
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function store(StoreStudentRequest $request)
    {
        
       $student=Student::create($request->all());

        
        return response()->json(['message' => 'Estudiante creado correctamente',"data"=>$student], 201);
    }
}
