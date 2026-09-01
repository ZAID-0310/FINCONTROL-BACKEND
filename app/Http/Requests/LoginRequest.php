<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{   
    /***
     * Esta clase LoginRequest sirve como la puerta de validación previa al inicio de sesión.
     *Antes de intentar autenticar al usuario o buscarlo en la base de datos, valida que los datos 
     *ingresados cumplan con la estructura básica requerida
     */


    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Permite que cualquier usuario pueda hacer la solicitud de inicio de sesión. Cambiar a false si se quiere restringir el acceso.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }
}
