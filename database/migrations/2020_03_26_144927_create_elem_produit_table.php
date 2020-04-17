
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateElemProduitTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `elem_produit` (\n  `idElemProduit` int(11) NOT NULL AUTO_INCREMENT,\n  `numElem` int(11) NOT NULL,\n  `codeProduit` int(11) NOT NULL,\n  PRIMARY KEY (`idElemProduit`),\n  KEY `numElem` (`numElem`),\n  KEY `codeProduit` (`codeProduit`),\n  CONSTRAINT `elem_produit_ibfk_1` FOREIGN KEY (`codeProduit`) REFERENCES `produit` (`codeProduit`) ON DELETE CASCADE ON UPDATE CASCADE,\n  CONSTRAINT `elem_produit_ibfk_2` FOREIGN KEY (`numElem`) REFERENCES `elementbase` (`numElem`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('elem_produits', function (Blueprint $table) {
            // ["idElemProduit", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();
        // ["numElem", "int(11)", "NO", "MUL", null, ""]
        $table->integer('numElem');
        // ["codeProduit", "int(11)", "NO", "MUL", null, ""]
        $table->integer('codeProduit');
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
        Schema::dropIfExists('elem_produits');
    }
}
?>
