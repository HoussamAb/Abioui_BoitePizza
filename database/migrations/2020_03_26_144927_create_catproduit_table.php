<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatproduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catproduits', function (Blueprint $table) {
            // ["catID", "int(11)", "NO", "PRI", null, "auto_increment"]
            $table->integer('id')->autoIncrement();

            $table->integer('catID')->unique();
            // ["nomCat", "varchar(50)", "NO", "", null, ""]
            $table->string('nomCat', 50);
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
        Schema::dropIfExists('catproduit');
    }
}
