<?php

class TableCreate
{
    public static function createTable($number)
    {
        $primes = CreatePrime::generatePrimes($number);
        $table = [];

        foreach ($primes as $row) {
            foreach ($primes as $col) {
                $table[$row][$col] = $row * $col;
            }
        }

        return $table;
    }
}