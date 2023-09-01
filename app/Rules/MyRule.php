<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use App\Models\User;
class MyRule implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    public function passes($attribute,$value){
        return $value !== 'mhamad@gmail.com';
          }
          public function message(){
            return 'you are not mhamad fuck you';

          }
}
