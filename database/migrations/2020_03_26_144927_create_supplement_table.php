
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateSupplementTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `supplement` (\n  `numingred` int(11) NOT NULL AUTO_INCREMENT,\n  `prix` double NOT NULL,\n  `nomingred` varchar(100) NOT NULL,\n  PRIMARY KEY (`numingred`)\n) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('supplements', function (Blueprint $table) {
        // ["numingred", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();
        // ["prix", "double", "NO", "", null, ""]
        $table->double('prix');
        // ["nomingred", "varchar(100)", "NO", "", null, ""]
        $table->string('nomingred', 100);
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
        Schema::dropIfExists('supplements');
    }
}
?>
