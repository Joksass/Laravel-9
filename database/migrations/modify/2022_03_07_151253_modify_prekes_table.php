<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prekes', function (Blueprint $table) {
            $table->integer('nuolaida');
            $table->renameColumn('aprasymas', 'apie');
            $table->dropColumn('svoris');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prekes', function (Blueprint $table) {
            $table->integer('svoris')->after('kaina');
            $table->renameColumn('apie', 'aprasymas');
            $table->dropColumn('nuolaida');
        });
    }
};
