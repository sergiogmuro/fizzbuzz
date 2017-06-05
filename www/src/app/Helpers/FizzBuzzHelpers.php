<?php

namespace App\Helpers;

use \Log;

class FizzBuzzHelpers
{
    /**
     * validateIsNumericValue
     *
     * Validate if the value is a numeric value
     *
     * @param  $value
     * @return false or true
     */
    public static function validateIsNumericValue($value)
    {
        Log::info("[validateIsNumericValue] :: Check value '$value'");

        if (is_numeric($value)) {
            Log::info('[validateIsNumericValue] :: Value is numeric');
            return true;
        }

        // return false with not is a number
        Log::Error("[validateIsNumericValue] :: Value '$value' is not numeric");
        return false;
    }
}
