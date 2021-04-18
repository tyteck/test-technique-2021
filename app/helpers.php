<?php

function fibonacci(int $number): int
{
    if ($number < 0) {
        throw new InvalidArgumentException('seriously ?');
    }
    if ($number === 0) {
        return 0;
    }

    if ($number === 1) {
        return 1;
    }

    return fibonacci($number - 1) + fibonacci($number - 2);
}

function fiboSuite(int $nbItems): array
{
    if ($nbItems < 0) {
        throw new InvalidArgumentException('seriously ?');
    }
    $result = [];
    for ($i = 0; $i < $nbItems; $i++) {
        $result[] = fibonacci($i);
    }
    return $result;
}
