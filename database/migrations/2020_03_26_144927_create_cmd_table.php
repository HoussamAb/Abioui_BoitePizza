
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
        $table->integer('id')->autoIncrement();
        $table->integer('client_id')->references('id')->on('client')->onDelete('cascade');
        $table->timestamp('date')->default(\DB::raw('CURRENT_TIMESTAMP'));
        $table->string('adressLiv', 255);
        $table->string('type', 10);
        $table->integer('realise');
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
