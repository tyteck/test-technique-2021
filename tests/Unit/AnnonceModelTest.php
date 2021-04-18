<?php

namespace Tests\Unit;

use App\Models\Annonce;
use Tests\TestCase;

class AnnonceModelTest extends TestCase
{
    /** @var \App\Models\Annonce */
    protected $annonce;

    public function setUp(): void
    {
        parent::setUp();
        $this->annonce = Annonce::factory()->create();
    }

    /** @test */
    public function factory_is_ok()
    {
        $this->assertInstanceOf(Annonce::class, $this->annonce);
    }
}
