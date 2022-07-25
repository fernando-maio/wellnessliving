<?php

use App\Services\DataUtilService;
use PHPUnit\Framework\TestCase;

class ValidateElementTest extends TestCase
{
    public function testElementSuccess()
    {
        $data = new DataUtilService;
        $response = $data->validateElement("Test");

        $this->assertTrue($response);
    }

    public function testElementAsNumberFail()
    {
        $data = new DataUtilService;
        $response = $data->validateElement("12345");

        $this->assertFalse($response);
    }

    public function testElementEmptyFail()
    {
        $data = new DataUtilService;
        $response = $data->validateElement("");

        $this->assertFalse($response);
    }
}