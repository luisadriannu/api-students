<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
          'nombre_alumno' => 'required',
          'apellido_alumno' => 'required',
          'dni'=> 'required',
          'distrito'=> 'required',
          'telefono'=> 'required|numeric|max_digits:10',
          'correo'=> 'required|email|unique:alumno,correo',
          'edad'=> 'required|numeric|max_digits:2',
          'fecha_nac'=> 'required|date|date_format:Y-m-d',
          'curso' => 'required',
          'horario' => 'required|in:mañana,tarde,noche'
        ];
    }
}
