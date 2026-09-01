<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{   
    /**
     * Esa clase RegisterRequest es un filtro de seguridad y calidad de datos. 
     * Su única responsabilidad es verificar que la información enviada por el usuario (o desde el cliente/frontend) 
     * cumpla con los requisitos requeridos antes de permitirle al sistema procesar la cuenta o interactuar con la base de datos.
     */

    /**
     * 1. Evitar la entrada de datos basura a la Base de Datos
     *Si un usuario intenta registrarse enviando un campo vacío, un correo con formato inválido (usuario@sin-dominio) 
     *o una contraseña de 2 caracteres, Laravel detiene la solicitud antes de tocar la base de datos y le responde con un error 
     *indicando qué campo falló.
     */
   
    public function authorize(): bool
    {
        return true; // Permite que cualquier usuario pueda hacer la solicitud de registro. Cambiar a false si se quiere restringir el acceso.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }
}
