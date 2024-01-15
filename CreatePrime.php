<?php

class CreatePrime
{
    public static function generatePrimes($count)
    {
        $primes = [];
        $number = 2;

        while (count($primes) < $count) {
            if (self::isPrime($number)) {
                $primes[] = $number;
            }
            $number++;
        }

        return $primes;
    }

    private static function isPrime($num)
    {
        if ($num < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
