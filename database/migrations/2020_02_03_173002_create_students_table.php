<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *                  "mbrstud" => 1120,
                        "imestud" => "Zdenko",
                        "prezstud" => "Kolac",
                        "pbrrod" => "",
                        "pbrstan" => "",
                        "datrodstud" => "1985-06-06 00:00:00",
                        "jmbgstud" => "0606985330186",
                        "slikastud" => 0,
                        "email" => "zdenko.kolac@algebra.hr",
     * 
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('mbrstud'); //mbrstud
            $table->char('imestud',50)->index();
            $table->char('prezstud',50)->index();
            $table->integer('pbrrod', false);
            $table->integer('pbrstan', false);
            $table->dateTime('datrodstud');
            $table->char('jmbgstud',13);
            $table->tinyInteger('slikastud');
            $table->char('email',50)->nullable();
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
        Schema::dropIfExists('students');
    }
}
