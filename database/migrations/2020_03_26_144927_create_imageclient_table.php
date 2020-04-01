
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateImageclientTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `imageclient` (\n  `imgID` int(11) NOT NULL AUTO_INCREMENT,\n  `imgName` varchar(255) NOT NULL,\n  `imgPath` text NOT NULL,\n  `imgType` varchar(255) NOT NULL,\n  PRIMARY KEY (`imgID`)\n) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('imageclients', function (Blueprint $table) {
            // ["imgID", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();

        $table->integer('imgID');
        // ["imgName", "varchar(255)", "NO", "", null, ""]
        $table->string('imgName', 255);
        // ["imgPath", "text", "NO", "", null, ""]
        $table->text('imgPath');
        // ["imgType", "varchar(255)", "NO", "", null, ""]
        $table->string('imgType', 255);
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
        Schema::dropIfExists('imageclients');
    }
}
?>
