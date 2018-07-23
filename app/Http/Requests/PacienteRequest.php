<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
       
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'nombre' => 'required',
                    'cedula'      => 'required|numeric|unique:paciente,cedula',
                    'ocupacion'   => 'required',
                    'nacionalidad'   => 'required',
                    'fecha_nacimiento'   => 'required',
                    'region'   => 'required',
                    'direccion'   => 'required',
                    'movil'   => 'required|numeric|digits_between:8,11',
                    'telefono'   => 'nullable|numeric|digits_between:8,11',
                    'email'   => 'nullable|email|unique:paciente,email',
                    'estado_civil'   => 'required',

                ];
            }
            case 'PUT':
            {
                return [
                    'nombre' => 'required',
                    'cedula'      => 'required|unique:paciente,cedula,'.$this->get('id'),
                    'ocupacion'   => 'required',
                    'nacionalidad'   => 'required',
                    'fecha_nacimiento'   => 'required',
                    'region'   => 'required',
                    'direccion'   => 'required',
                    'movil'   => 'required',
                    'telefono'   => 'required',
                    'email'   => 'required',
                    'estado_civil'   => 'required',
                ];
            }
            case 'PATCH':
            default:break;
        }
    }

    public function messages()
    {
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'nombre.required' => 'El campo nombre es requerido',
                    'email.unique' => 'Este correo ya existe en el sistema',
                    'cedula.numeric' => 'El campo cédula debe ser numérico',
                ];
            }
            case 'PUT':
            {
                return [
                    'nombre.required' => 'El campo nombre es requerido',
                    'email.unique' => 'Este correo ya existe en el sistema',
                    'cedula.numeric' => 'El campo cédula debe ser numérico',
                ];
            }
            case 'PATCH':
            default:break;
        }
    }
}
