<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceCandidatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce_candidat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidat_id');
            $table->unsignedInteger('annonce_id');
            $table->timestamps();
            $table->foreign('candidat_id')
                ->references('id')
                ->on('candidats')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('annonce_id')
                ->references('id')
                ->on('annonces')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidature');
    }
}
