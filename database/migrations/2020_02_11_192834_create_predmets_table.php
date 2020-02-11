<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredmetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predmets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('kratica',8);
            $table->char('naziv',60);
            $table->integer('orgjed_id', false)->index();  //foreign key za orgjed
            $table->integer('upisano_studenata', false);
            $table->integer('broj_sati', false);        
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
        Schema::dropIfExists('predmets');
    }
}
