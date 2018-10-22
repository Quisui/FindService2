<?php

namespace FindService\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
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
        return [
            //login_email es el id o nombre del campo a validar del formulario de login (iput id | nombre =login_email)
            //'login_email'=>'required|max:60',
            //'login_password'=>'required|max:50',
            'nombre'=>'required|max:20',
            'apellido'=>'required|max:20',
            'contraseña'=>'required|max:50',
            'correo'=>'required|max:60',
            'nombre_usuario'=>'max:25',
            'numero_telefono'=>'max:13',
            'fecha_nacimiento'=>''
        ];
    }
}
