<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidBitcoinAddress implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $btcPattern = '/^(bc1|[13])[a-zA-HJ-NP-Z0-9]{25,39}$/';
        if(!preg_match($btcPattern, $value) > 0){
            $fail('Поле :attribute не соответствует настоящему адресу.');
        }
    }
}
