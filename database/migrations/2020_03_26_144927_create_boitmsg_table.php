
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateBoitmsgTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `boitmsg` (\n  `idMsg` int(11) NOT NULL AUTO_INCREMENT,\n  `numClient` int(11) NOT NULL,\n  `objet` text NOT NULL,\n  `message` text NOT NULL,\n  `vu` int(3) NOT NULL,\n  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,\n  PRIMARY KEY (`idMsg`),\n  KEY `numClient` (`numClient`),\n  CONSTRAINT `boitmsg_ibfk_1` FOREIGN KEY (`numClient`) REFERENCES `client` (`numClient`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('boitmsgs', function (Blueprint $table) {
            // ["idMsg", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();
        $table->integer('idMsg');
        // ["numClient", "int(11)", "NO", "MUL", null, ""]
        $table->integer('numClient');
        // ["objet", "text", "NO", "", null, ""]
        $table->text('objet');
        // ["message", "text", "NO", "", null, ""]
        $table->text('message');
        // ["vu", "int(3)", "NO", "", null, ""]
        $table->integer('vu');
        // ["date", "datetime", "NO", "", "CURRENT_TIMESTAMP", ""]
        $table->datetime('date')->default(\DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('boitmsgs');
    }
}
?>
