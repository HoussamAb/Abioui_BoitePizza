
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `rating` (\n  `idRat` int(11) NOT NULL AUTO_INCREMENT,\n  `numClient` int(11) NOT NULL,\n  `rat` double NOT NULL,\n  PRIMARY KEY (`idRat`),\n  KEY `numClient` (`numClient`),\n  CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`numClient`) REFERENCES `client` (`numClient`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            // ["idRat", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();
        // ["numClient", "int(11)", "NO", "MUL", null, ""]
        $table->integer('numClient')->references('id')->on('client')->onDelete('cascade');
        // ["rat", "double", "NO", "", null, ""]
        $table->double('rat');
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
        Schema::dropIfExists('ratings');
    }
}
?>
