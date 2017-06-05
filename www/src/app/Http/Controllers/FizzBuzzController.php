<?php

namespace App\Http\Controllers;

use \Log;
use Exception;

class FizzBuzzController extends Controller
{
    /**
     * index
     *
     * @param  $min First Value
     * @param  $max Second Value
     * @return void
     */
    public function index($min, $max)
    {
        try {
            if ($this->validateIsNumericValue($min) && $this->validateIsNumericValue($max)) {
                Log::info('User failed to login.');
                $this->startProcess($min, $max);
            } else {
                // Send an exception
                Log::error('Bad Request');
                throw new Exception("Bad Request", 1);
            }
        } catch (ExceptionHandler $e) {
            return $e;
        }
    }

    /**
     * validateIsNumericValue
     *
     * Validate if the value is a numeric value
     *
     * @param  $value
     * @return false or true
     */
    private function validateIsNumericValue($value)
    {
        if (is_numeric($value)) {
            return true;
        }

        // return false with not is a number
        return false;
    }

    /**
     * startProcess
     *
     * @param  int $min Min Value
     * @param  int $max Max Value
     * @return void
     */
    private function startProcess($min, $max)
    {
        for ($i = $min; $i <= $max; $i ++) {
            $output = ($i % 3 == 0) ? 'Fizz' : '';
            $output .= ($i % 5 == 0) ? 'Buzz' : '';

            $res = (empty($output)) ? $i : $output;

            echo $res . PHP_EOL;
            echo '<br/>' . PHP_EOL;
        }
    }
}
