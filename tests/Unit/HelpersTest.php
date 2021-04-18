<?php

namespace Tests\Unit;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /** @test */
    public function invalid_number_will_throw_exception()
    {
        $this->expectException(InvalidArgumentException::class);
        fibonacci(-12);
    }

    /** @test */
    public function zero_should_return_zero()
    {
        $this->assertEquals(0, fibonacci(0));
    }

    /** @test */
    public function one_should_return_one()
    {
        $this->assertEquals(1, fibonacci(1));
    }

    /** @test */
    public function two_should_return_one()
    {
        $this->assertEquals(1, fibonacci(2));
    }

    /** @test */
    public function three_should_return_two()
    {
        $this->assertEquals(2, fibonacci(3));
    }

    /** @test */
    public function check_some_numbers()
    {
        $expectedResults = [
            5 => 5,
            7 => 13,
            8 => 21,
            11 => 89,
            14 => 377,
            15 => 610,
            16 => 987,
            21 => 10946,
            23 => 28657,
            25 => 75025,
        ];

        array_map(function ($number, $expectedResult) {
            $this->assertEquals($expectedResult, fibonacci($number));
        }, array_keys($expectedResults), $expectedResults);
    }

    /** @test */
    public function fibo_suite_is_throwing_exception()
    {
        $this->expectException(InvalidArgumentException::class);
        fiboSuite(-12);
    }

    /** @test */
    public function fibo_suite_for_one_item_is_ok()
    {
        $result = fiboSuite(1);
        $this->assertIsArray($result);
        $this->assertCount(1, $result);
        $this->assertEquals(0, $result[0]);
    }

    /** @test */
    public function fibo_suite_for_many_items_is_ok()
    {
        $expectedResults = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987];
        $nbItems = count($expectedResults);
        $result = fiboSuite($nbItems);
        $this->assertIsArray($result);
        $this->assertCount($nbItems, $result);

        $index = 0;
        array_map(function ($item) use ($expectedResults, &$index) {
            $this->assertEquals($expectedResults[$index++], $item);
        }, $result);
    }
}
