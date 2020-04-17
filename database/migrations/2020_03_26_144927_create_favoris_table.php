
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateFavorisTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `favoris` (\n  `id` int(11) NOT NULL AUTO_INCREMENT,\n  `codeProduit` int(11) NOT NULL,\n  `numClient` int(11) NOT NULL,\n  PRIMARY KEY (`id`),\n  KEY `codeProduit` (`codeProduit`),\n  KEY `numClient` (`numClient`),\n  CONSTRAINT `favoris_ibfk_1` FOREIGN KEY (`codeProduit`) REFERENCES `produit` (`codeProduit`) ON DELETE CASCADE ON UPDATE CASCADE,\n  CONSTRAINT `favoris_ibfk_2` FOREIGN KEY (`numClient`) REFERENCES `client` (`numClient`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('favoris', function (Blueprint $table) {
            // ["id", "int(11)", "NO", "PRI", null, "auto_increment"]

        $table->increments('id');
        // ["codeProduit", "int(11)", "NO", "MUL", null, ""]
        $table->integer('codeProduit')->references('id')->on('produits')->onDelete('cascade');;
        // ["numClient", "int(11)", "NO", "MUL", null, ""]
        $table->integer('numClient')->references('id')->on('client')->onDelete('cascade');
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
        Schema::dropIfExists('favoriss');
    }
}
?>
