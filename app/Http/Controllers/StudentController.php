<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreStudentRequest;

use App\Models\Student; // Asegúrate de importar el modelo Student

class StudentController extends Controller
{
    public function store(StoreStudentRequest $request)
    {
      DB::beginTransaction();
      try {

        Student::create($request->all());
        
        DB::commit();
        
        return response()->json(['message' => 'Estudiante creado correctamente'], 201);
      } catch (\Exception $e) {
        DB::rollback();
        
        return response()->json(['message' => $e->getMessage()], 500);
      }
        
    }
}
