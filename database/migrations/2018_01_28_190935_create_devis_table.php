<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->Integer('tel');

            $table->string('adresse');
            $table->Integer('cp');
            $table->string('ville');

            $table->boolean('installation')->nullable();
            $table->boolean('entretien')->nullable();
            $table->boolean('depannage')->nullable();

            $table->date('dateVoulu');
            $table->longText('desc');

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
        Schema::dropIfExists('devis');
    }
}
