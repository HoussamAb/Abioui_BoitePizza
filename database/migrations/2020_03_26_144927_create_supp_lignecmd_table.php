
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateSuppLignecmdTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `supp_lignecmd` (\n  `idSuppLigne` int(11) NOT NULL AUTO_INCREMENT,\n  `numingred` int(11) NOT NULL,\n  `ligneID` int(11) NOT NULL,\n  PRIMARY KEY (`idSuppLigne`),\n  KEY `numingred` (`numingred`),\n  KEY `ligneID` (`ligneID`),\n  CONSTRAINT `supp_lignecmd_ibfk_1` FOREIGN KEY (`ligneID`) REFERENCES `lignecommande` (`ligneID`) ON DELETE CASCADE ON UPDATE CASCADE,\n  CONSTRAINT `supp_lignecmd_ibfk_2` FOREIGN KEY (`numingred`) REFERENCES `supplement` (`numingred`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('supp_lignecmds', function (Blueprint $table) {
            // ["idSuppLigne", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();

        $table->integer('idSuppLigne');
        // ["numingred", "int(11)", "NO", "MUL", null, ""]
        $table->integer('numingred');
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
        Schema::dropIfExists('supp_lignecmds');
    }
}
?>
