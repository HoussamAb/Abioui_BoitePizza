
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateLignecmdformTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `lignecmdform` (\n  `ligneID` int(11) NOT NULL AUTO_INCREMENT,\n  `numCommande` int(11) NOT NULL,\n  `codeFormule` int(11) NOT NULL,\n  PRIMARY KEY (`ligneID`),\n  KEY `numCommande` (`numCommande`),\n  KEY `codeProduit` (`codeFormule`),\n  CONSTRAINT `lignecmdform_ibfk_1` FOREIGN KEY (`numCommande`) REFERENCES `cmd` (`numCommande`) ON DELETE CASCADE ON UPDATE CASCADE,\n  CONSTRAINT `lignecmdform_ibfk_2` FOREIGN KEY (`codeFormule`) REFERENCES `formule` (`codeFormule`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('lignecmdforms', function (Blueprint $table) {
            // ["ligneID", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();
        // ["numCommande", "int(11)", "NO", "MUL", null, ""]
        $table->integer('numCommande')->references('id')->on('cmds')->onDelete('cascade');
        // ["codeFormule", "int(11)", "NO", "MUL", null, ""]
        $table->integer('codeFormule')->references('id')->on('formules')->onDelete('cascade');;
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
        Schema::dropIfExists('lignecmdforms');
    }
}
?>
