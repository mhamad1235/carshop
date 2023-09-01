<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\InvokableRule;
use Str;
class StrongPassword implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     */
    public function __invoke(string $attribute, mixed $value, Closure $fail): void
    {
        if (Str::contains($value, 'needles')) {
          $fail('fuck you');
        }
    }
}
