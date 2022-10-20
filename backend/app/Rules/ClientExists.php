<?php

namespace App\Rules;

use App\Models\Cliente;
use Illuminate\Contracts\Validation\Rule;

class ClientExists implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $cliente = Cliente::where('id', $value)->count();

        return $cliente > 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Cliente não encontrado';
    }
}
