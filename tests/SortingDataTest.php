<?php

use App\Services\DataUtilService;
use PHPUnit\Framework\TestCase;

class SortingDataTest extends TestCase
{
    public function testSortingSuccess()
    {
        $arr = [
            'Mary', 
            'Jhon', 
            'Catty', 
            'Marck', 
            'Nelson', 
            'Yuri', 
            'Greg', 
            'Charles'
        ];

        $data = new DataUtilService;
        $response = $data->sortingData($arr);

        $this->assertEquals(reset($response), 'Catty');
    }
}
