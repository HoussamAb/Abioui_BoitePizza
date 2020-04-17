
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
        // ["numClient", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();
        // ["nom", "varchar(100)", "NO", "", null, ""]
        $table->string('nom', 100);
        // ["prenom", "varchar(100)", "NO", "", null, ""]
        $table->string('prenom', 100);
        // ["adresse", "varchar(100)", "NO", "", null, ""]
        $table->string('adresse', 100);
        // ["email", "varchar(100)", "NO", "", null, ""]
        $table->string('email', 100);
        // ["login", "varchar(100)", "NO", "", null, ""]
        $table->string('login', 100);
        // ["motdepasse", "varchar(100)", "NO", "", null, ""]
        $table->string('motdepasse', 100);
        // ["ca", "double", "NO", "", null, ""]
        $table->double('ca')->nullable();
        // ["date_inscr", "datetime", "YES", "", "CURRENT_TIMESTAMP", ""]
        $table->datetime('date_inscr')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
        // ["imgPath", "text", "NO", "", null, ""]
        $table->text('imgPath');
        // ["admin", "char(1)", "NO", "", null, ""]
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
