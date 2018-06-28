<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
                    'name' => 'required',
                    'email'      => 'required|email|unique:users,email',
                    'password'   => 'required|alpha_num|min:6',
                ];
            }
            case 'PUT':
            {
                return [
                    'name' => 'required',
                    'email'      => 'required|email|unique:users,email,'.$this->get('id'),
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
                    'name.required' => 'El campo nombre es requerido',
                    'email.required' => 'El campo email es requerido',
                    'email.unique' => 'Este correo ya existe en el sistema',
                    'password.required' => 'El campo contraseña es requerido',
                    'password.min' => 'El campo contraseña necesita mínimo 6 caracteres',
                    'password.alpha_num' => 'El campo contraseña necesita ser alfanumérico',
                ];
            }
            case 'PUT':
            {
                return [
                    'name.required' => 'El campo nombre es requerido',
                    'email.required' => 'El campo email es requerido',
                ];
            }
            case 'PATCH':
            default:break;
        }
    }
}
