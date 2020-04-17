
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateElementbaseTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `elementbase` (\n  `numElem` int(11) NOT NULL AUTO_INCREMENT,\n  `nomElem` varchar(100) NOT NULL,\n  PRIMARY KEY (`numElem`)\n) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('elementbases', function (Blueprint $table) {
            // ["numElem", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();
        // ["nomElem", "varchar(100)", "NO", "", null, ""]
        $table->string('nomElem', 100);
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
        Schema::dropIfExists('elementbases');
    }
}
?>
