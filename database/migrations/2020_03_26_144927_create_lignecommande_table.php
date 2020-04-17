
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateLignecommandeTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `lignecommande` (\n  `ligneID` int(11) NOT NULL AUTO_INCREMENT,\n  `numCommande` int(11) NOT NULL,\n  `codeProduit` int(11) NOT NULL,\n  `prix` double NOT NULL,\n  `nb` int(11) NOT NULL,\n  PRIMARY KEY (`ligneID`),\n  KEY `numCommande` (`numCommande`),\n  KEY `codeProduit` (`codeProduit`),\n  CONSTRAINT `lignecommande_ibfk_1` FOREIGN KEY (`numCommande`) REFERENCES `cmd` (`numCommande`) ON DELETE CASCADE ON UPDATE CASCADE,\n  CONSTRAINT `lignecommande_ibfk_2` FOREIGN KEY (`codeProduit`) REFERENCES `produit` (`codeProduit`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('lignecommandes', function (Blueprint $table) {
        // ["ligneID", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();
        // ["numCommande", "int(11)", "NO", "MUL", null, ""]
        $table->integer('numCommande')->references('id')->on('cmds')->onDelete('cascade');;
        // ["codeProduit", "int(11)", "NO", "MUL", null, ""]
        $table->integer('codeProduit')->references('id')->on('produits')->onDelete('cascade');;
        // ["prix", "double", "NO", "", null, ""]
        $table->double('prix');
        // ["nb", "int(11)", "NO", "", null, ""]
        $table->integer('nb');
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
        Schema::dropIfExists('lignecommandes');
    }
}
?>
