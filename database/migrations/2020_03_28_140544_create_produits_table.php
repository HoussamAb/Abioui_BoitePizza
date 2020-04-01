<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            // ["codeProduit", "int(11)", "NO", "PRI", null, "auto_increment"]
            $table->integer('id')->autoIncrement();

            $table->integer('codeProduit');
            // ["nom", "varchar(255)", "NO", "", null, ""]
            $table->string('nom', 255);
            // ["prix", "float(255,0)", "NO", "", null, ""]
            $table->float('prix', 255, 0);
            // ["catID", "int(11)", "NO", "MUL", null, ""]
            $table->integer('catID');
            // ["remise", "int(11)", "NO", "", "0", ""]
            $table->integer('remise')->default('0');
            // ["date_debut", "datetime", "YES", "", null, ""]
            $table->datetime('date_debut')->nullable();
            // ["date_fin", "datetime", "YES", "", null, ""]
            $table->datetime('date_fin')->nullable();
            // ["isPromo", "int(11)", "YES", "", "0", ""]
            $table->integer('isPromo')->default('0');
            // ["imgPath", "text", "NO", "", null, ""]
            $table->text('imgPath');
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
        Schema::dropIfExists('produits');
    }
}
