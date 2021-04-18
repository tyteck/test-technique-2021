<?php

namespace Tests\Unit;

use App\Models\Annonce;
use App\Models\Candidat;
use Tests\TestCase;

class CandidatModelTest extends TestCase
{
    /** @var \App\Models\Candidat */
    protected $candidat;

    public function setUp(): void
    {
        parent::setUp();
        $this->candidat = Candidat::factory()->create();
    }

    /** @test */
    public function factory_is_ok()
    {
        $this->assertInstanceOf(Candidat::class, $this->candidat);
    }

    /** @test */
    public function apply_for_is_ok()
    {
        $this->assertCount(0, $this->candidat->annonces);
        $annonce = Annonce::factory()->create();

        $this->candidat->applyFor($annonce);
        $this->candidat->refresh();
        $this->assertCount(1, $this->candidat->annonces);
    }

    /** @test */
    public function is_not_interested_anymore_is_ok()
    {
        $annonce = Annonce::factory()->create();
        $this->candidat->applyFor($annonce);
        $this->candidat->refresh();
        $this->assertCount(1, $this->candidat->annonces);

        $this->candidat->isNotInterestedBy($annonce);
        $this->candidat->refresh();
        $this->assertCount(0, $this->candidat->annonces);
    }

    /** @test */
    public function has_applied_for_is_ok()
    {
        $annonces = Annonce::factory(2)->create();
        $theOneHeAppliedFor = $annonces->first();
        $theOneHeDoesntWant = $annonces->last();

        $this->assertFalse($this->candidat->hasAppliedFor($theOneHeAppliedFor));

        $this->candidat->applyFor($theOneHeAppliedFor);
        $this->candidat->refresh();

        $this->assertTrue($this->candidat->hasAppliedFor($theOneHeAppliedFor));
    }
}
