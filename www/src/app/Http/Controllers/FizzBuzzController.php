<?php

namespace App\Http\Controllers;

use \Log;
use Exception;
use App\Helpers\FizzBuzzHelpers as Helpers;

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
        Log::info('[index] :: Start FizzBuzz');
        try {
            // Check if values are numeric
            if (Helpers::validateIsNumericValue($min) && Helpers::validateIsNumericValue($max)) {
                $this->startProcess($min, $max);
            } else {
                // Send an exception
                Log::error('[index] :: Bad Request');
                throw new Exception("Bad Request", 400);
            }
        } catch (ExceptionHandler $e) {
            return $e;
        }
        Log::info('[index] :: End FizzBuzz');
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
        Log::info('[startProcess] :: Start Process');

        if ($min > $max) {
            Log::Error('[startProcess] :: First value is highest to second value');
            throw new Exception('First value is highest to second value', 400);
        }

        for ($i = $min; $i <= $max; ++$i) {
            $output = ($i % 3 == 0) ? 'Fizz' : '';
            $output .= ($i % 5 == 0) ? 'Buzz' : '';

            $res = (empty($output)) ? $i : $output;

            echo $res . PHP_EOL;
            echo '<br/>' . PHP_EOL;
        }
    }
}
