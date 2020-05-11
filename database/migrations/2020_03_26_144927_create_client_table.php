
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `client` (\n  `numClient` int(11) NOT NULL AUTO_INCREMENT,\n  `nom` varchar(100) NOT NULL,\n  `prenom` varchar(100) NOT NULL,\n  `adresse` varchar(100) NOT NULL,\n  `email` varchar(100) NOT NULL,\n  `login` varchar(100) NOT NULL,\n  `motdepasse` varchar(100) NOT NULL,\n  `ca` double NOT NULL,\n  `imgID` int(11) NOT NULL,\n  `date_inscr` datetime DEFAULT CURRENT_TIMESTAMP,\n  `imgPath` text NOT NULL,\n  `admin` char(1) NOT NULL,\n  PRIMARY KEY (`numClient`),\n  KEY `imgID` (`imgID`),\n  CONSTRAINT `client_ibfk_1` FOREIGN KEY (`imgID`) REFERENCES `imageclient` (`imgID`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
        $table->integer('id')->autoIncrement();
        $table->string('nom', 100);
        $table->string('prenom', 100);
        $table->string('adresse', 100);
        $table->string('email', 100);
        $table->string('login', 100);
        $table->string('motdepasse', 100);
        $table->double('ca')->nullable();
        $table->datetime('date_inscr')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
        $table->text('imgPath');
        $table->char('admin', 1);
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
        Schema::dropIfExists('clients');
    }
}
?>
