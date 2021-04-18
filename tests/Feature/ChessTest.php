<?php

namespace Tests\Feature;

use Tests\TestCase;

class ChessTest extends TestCase
{
    /** @test */
    public function route_is_ok()
    {
        $response = $this->get(route('chess'));
        $response->assertStatus(200);
    }

    /** @test */
    public function chess_has_the_right_number_of_cells()
    {
        $response = $this->get(route('chess'));
        $cellsToCheck = [];
        for ($row = 0;$row < 8;$row++) {
            for ($col = 0;$col < 8;$col++) {
                $cellsToCheck[] = "cell-{$row}{$col}";
            }
        }
        $response->assertSeeInOrder($cellsToCheck);
    }
}
