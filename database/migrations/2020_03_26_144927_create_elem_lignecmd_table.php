
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateElemLignecmdTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `elem_lignecmd` (\n  `id` int(11) NOT NULL AUTO_INCREMENT,\n  `numElem` int(11) NOT NULL,\n  `ligneID` int(11) NOT NULL,\n  PRIMARY KEY (`id`),\n  KEY `numElem` (`numElem`),\n  KEY `ligneID` (`ligneID`),\n  CONSTRAINT `elem_lignecmd_ibfk_1` FOREIGN KEY (`numElem`) REFERENCES `elementbase` (`numElem`) ON DELETE CASCADE ON UPDATE CASCADE,\n  CONSTRAINT `elem_lignecmd_ibfk_2` FOREIGN KEY (`ligneID`) REFERENCES `lignecommande` (`ligneID`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('elem_lignecmds', function (Blueprint $table) {
            // ["id", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->increments('id');
        // ["numElem", "int(11)", "NO", "MUL", null, ""]
        $table->integer('numElem');
        // ["ligneID", "int(11)", "NO", "MUL", null, ""]
        $table->integer('ligneID');
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
        Schema::dropIfExists('elem_lignecmds');
    }
}
?>
