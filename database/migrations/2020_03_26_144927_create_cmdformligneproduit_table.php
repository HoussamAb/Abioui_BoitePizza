
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCmdformligneproduitTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `cmdformligneproduit` (\n  `idFormLigneProd` int(11) NOT NULL AUTO_INCREMENT,\n  `ligneID` int(11) NOT NULL,\n  `codeProduit` int(11) NOT NULL,\n  PRIMARY KEY (`idFormLigneProd`),\n  KEY `ligneID` (`ligneID`),\n  KEY `codeProduit` (`codeProduit`),\n  CONSTRAINT `cmdformligneproduit_ibfk_1` FOREIGN KEY (`ligneID`) REFERENCES `lignecmdform` (`ligneID`) ON DELETE CASCADE ON UPDATE CASCADE,\n  CONSTRAINT `cmdformligneproduit_ibfk_2` FOREIGN KEY (`codeProduit`) REFERENCES `produit` (`codeProduit`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1']
     * @return void
     */
    public function up()
    {
        Schema::create('cmdformligneproduits', function (Blueprint $table) {
            // ["idFormLigneProd", "int(11)", "NO", "PRI", null, "auto_increment"]
            $table->integer('id')->autoIncrement();

            $table->integer('idFormLigneProd');
        // ["ligneID", "int(11)", "NO", "MUL", null, ""]
        $table->integer('ligneID');
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
        Schema::dropIfExists('cmdformligneproduits');
    }
}
?>
