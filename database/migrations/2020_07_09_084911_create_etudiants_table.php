<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('formation');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->double('montant')->default(0);
            $table->double('avance')->default(0);
            // $table->enum('formation', array('M', 'F'))->default('M');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
