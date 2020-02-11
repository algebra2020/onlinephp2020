<?php
/**
 * OVAKO SE MIGRIRA SINGLE TABLE:

$ php artisan migrate --path "database/migrations/2020_02_11_184824_nastavniks.php"
Migrating: 2020_02_11_184824_nastavniks
Migrated:  2020_02_11_184824_nastavniks (0.63 seconds)

 * 
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nastavniks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('nastavniks', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->char('ime',50)->index();
            $table->char('prezime',50)->index();
            $table->integer('pbrstan', false);
            $table->integer('orgjed_id', false)->index();  //foreign key za orgjed
            $table->decimal('koef',3,2);
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
        Schema::dropIfExists('nastavniks');
    }
}
