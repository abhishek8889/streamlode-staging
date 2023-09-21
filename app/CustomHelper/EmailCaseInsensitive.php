<?php

namespace App\CustomHelper;

use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;

class EmailCaseInsensitive extends Validator
{
    public function validateEmailCaseInsensitive($attribute, $value, $parameters)
    {
        $count = DB::table('users')
        ->whereRaw('LOWER(email) = ?', [strtolower($value)])
        ->count();

        return $count > 0;
    }

}