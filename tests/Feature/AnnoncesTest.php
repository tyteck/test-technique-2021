<?php

namespace Tests\Feature;

use Tests\TestCase;

class AnnoncesTest extends TestCase
{
    /** @test */
    public function route_is_ok()
    {
        $response = $this->get(route('annonces.index'));
        $response->assertStatus(200);
    }
}
