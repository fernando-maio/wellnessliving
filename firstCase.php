<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Services\DataUtilService;

/** 
 * Test Case #1: 
 * Find the first element in alphabetical order for an array of strings using a loop (without php array sorting functions). 
 * For example, for this array: $a=['my','name','is','john','doe']; the result should be 'doe'. 
 * Please try to use modern PHP 7.4/8.x features in solution.
**/

// Create a new instance of service
$service = new DataUtilService();

// To avoid fill different names on console, remove the comment and comment lines 15 to 30.
// $arr = ['Mary', 'Jhon', 'Catty', 'Marck', 'Nelson', 'Yuri', 'Greg', 'Charles'];

$arr = [];
$condition = true;
while ($condition) {
    $element = readline("\n\nEnter a new element: ");
    // Validate if the value is not empty or not a number
    if ($service->validateElement($element)) {
        array_push($arr, $element);
        echo("\nNew element added: $element \n\n");
    } else {
        echo("\nNumbers or empty values are not allowed!\n\n");
    }

    $answer = readline("\n\nDo you want to add a new element? Press 'y + Enter' for yes or any other key + Enter for no: ");
    if (strtolower($answer) !== 'y') {
        $condition = false;
    }
}

if (!empty($arr)) {
    $sortedData = $service->sortingData($arr);
    $firstElement = reset($sortedData);
    echo("\n\n* First element in alphabetical order: $firstElement");
} else {
    echo("\n\n* The list is empty. No values to sort.");
}
