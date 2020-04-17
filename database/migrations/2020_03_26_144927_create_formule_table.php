
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateFormuleTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `formule` (\n  `codeFormule` int(11) NOT NULL AUTO_INCREMENT,\n  `nomFormule` varchar(255) NOT NULL,\n  `prix` decimal(10,2) NOT NULL,\n  `description` text NOT NULL,\n  `imgPath` text NOT NULL,\n  PRIMARY KEY (`codeFormule`)\n) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('formules', function (Blueprint $table) {
            // ["codeFormule", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();
        // ["nomFormule", "varchar(255)", "NO", "", null, ""]
        $table->string('nomFormule', 255);
        // ["prix", "decimal(10,2)", "NO", "", null, ""]
        $table->decimal('prix', 10, 2);
        // ["description", "text", "NO", "", null, ""]
        $table->text('description');
        // ["imgPath", "text", "NO", "", null, ""]
        $table->text('imgPath');
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
        Schema::dropIfExists('formules');
    }
}
?>
