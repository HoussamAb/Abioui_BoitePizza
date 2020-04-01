
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCommentaireTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `commentaire` (\n  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,\n  `date_pub` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,\n  `texte` text NOT NULL,\n  `codeProduit` int(11) NOT NULL,\n  `numClient` int(11) NOT NULL,\n  PRIMARY KEY (`id_commentaire`),\n  KEY `codePiza` (`codeProduit`),\n  KEY `numClient` (`numClient`),\n  CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`numClient`) REFERENCES `client` (`numClient`) ON DELETE CASCADE ON UPDATE CASCADE,\n  CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`codeProduit`) REFERENCES `produit` (`codeProduit`) ON DELETE CASCADE ON UPDATE CASCADE\n) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8']
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            // ["id_commentaire", "int(11)", "NO", "PRI", null, "auto_increment"]
        $table->integer('id')->autoIncrement();

        $table->integer('id_commentaire');
        // ["date_pub", "datetime", "NO", "", "CURRENT_TIMESTAMP", ""]
        $table->datetime('date_pub')->default(\DB::raw('CURRENT_TIMESTAMP'));
        // ["texte", "text", "NO", "", null, ""]
        $table->text('texte');
        // ["codeProduit", "int(11)", "NO", "MUL", null, ""]
        $table->integer('codeProduit');
        // ["numClient", "int(11)", "NO", "MUL", null, ""]
        $table->integer('numClient');
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
        Schema::dropIfExists('commentaires');
    }
}
?>
