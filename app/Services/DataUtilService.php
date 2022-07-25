<?php

namespace App\Services;

class DataUtilService
{
    // Validate if the new element is empty or a number
    public function validateElement(string $var): bool
    {
        return !empty($var) && !is_numeric($var);
    }

    // Sort array of names
    public function sortingData(array $arr): array
    {
        $sorted = false;
        while (false === $sorted) {
            $sorted = true;
            for ($i = 0; $i < count($arr) - 1; $i++) {
                $current = $arr[$i];
                $next = $arr[$i + 1];
                if ($next < $current) {
                    $arr[$i] = $next;
                    $arr[$i + 1] = $current;
                    $sorted = false;
                }
            }
        }

        return $arr;
    }
}
