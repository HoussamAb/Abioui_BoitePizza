
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCmdTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `cmd` (\n  `numCommande` int(11) NOT NULL AUTO_INCREMENT,\n  `numClient` int(11) NOT NULL,\n  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,\n  `adressLiv` varchar(255) NOT NULL,\n  `type` varchar(10) NOT NULL,\n  `realise` int(11) NOT NULL,\n  `secteur` varchar(255) NOT NULL,\n  PRIMARY KEY (`numCommande`),\n  KEY `numClient` (`numClient`),\n  CONSTRAINT `cmd_ibfk_1` FOREIGN KEY (`numClient`) REFERENCES `client` (`numClient`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=10837 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('cmds', function (Blueprint $table) {
            // ["numCommande", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();
        // ["numClient", "int(11)", "NO", "MUL", null, ""]
        $table->integer('client_id')->references('id')->on('client')->onDelete('cascade');
        // ["date", "timestamp", "NO", "", "CURRENT_TIMESTAMP", ""]
        $table->timestamp('date')->default(\DB::raw('CURRENT_TIMESTAMP'));
        // ["adressLiv", "varchar(255)", "NO", "", null, ""]
        $table->string('adressLiv', 255);
        // ["type", "varchar(10)", "NO", "", null, ""]
        $table->string('type', 10);
        // ["realise", "int(11)", "NO", "", null, ""]
        $table->integer('realise');
        // ["secteur", "varchar(255)", "NO", "", null, ""]
        $table->string('secteur', 255);
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
        Schema::dropIfExists('cmds');
    }
}
?>
