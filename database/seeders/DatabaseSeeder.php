<?php

namespace Database\Seeders;

use App\Models\Annonce;
use App\Models\Candidat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $candidats = Candidat::factory(10)->create();
        $annonces = Annonce::factory(3)->create();

        $candidats->first()->applyFor($annonces->first());
        $candidats->last()->applyFor($annonces->first());

        $candidats->last()->applyFor($annonces->last());
    }
}
