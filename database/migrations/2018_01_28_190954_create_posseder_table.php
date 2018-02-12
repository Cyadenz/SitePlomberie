<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePossederTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posseder', function (Blueprint $table) {
            $table->integer('id_users')->unsigned()->foreign('id_users')->references('id')->on('users');
            $table->integer('id_devis')->unsigned()->foreign('id_devis')->references('id')->on('devis');

            $table->primary(array('id_users', 'id_devis'));
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
        Schema::dropIfExists('posseder');
    }
}
