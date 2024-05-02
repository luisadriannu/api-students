<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Asegúrate de importar el modelo Student
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
            'nombre_alumno' => 'required',
    'apellido_alumno' => 'required',
    'dni'=> 'required',
    'distrito'=> 'required',
    'telefono'=> 'required',
     'correo'=> 'required',
     'edad'=> 'required',
     'fecha_nac'=> 'required'
        ]);
 
        if ($validator->fails()) {
           return response()->json(['errors'=>$validator->errors()]);
        }
       

        
       $student=Student::create($request->all());

        
        return response()->json(['message' => 'Estudiante creado correctamente',"data"=>$student], 201);
    }
}
