
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     [b'CREATE TABLE `failed_jobs` (\n  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,\n  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,\n  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,\n  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,\n  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,\n  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci']
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobss', function (Blueprint $table) {
            // ["id", "bigint(20) unsigned", "NO", "PRI", null, "auto_increment"]

        $table->increments('id', 20);
        // ["connection", "text", "NO", "", null, ""]
        $table->text('connection');
        // ["queue", "text", "NO", "", null, ""]
        $table->text('queue');
        // ["payload", "longtext", "NO", "", null, ""]
        $table->longtext('payload');
        // ["exception", "longtext", "NO", "", null, ""]
        $table->longtext('exception');
        // ["failed_at", "timestamp", "NO", "", "CURRENT_TIMESTAMP", ""]
        $table->timestamp('failed_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('failed_jobss');
    }
}
?>
