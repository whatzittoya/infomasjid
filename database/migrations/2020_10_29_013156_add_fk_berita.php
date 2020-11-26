<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('BERITA', function (Blueprint $table) {
            $table->foreign('deleted_by')->references('id')->on('users');
            $table->foreign('insert_by')->references('id')->on('users');
            $table->foreign('update_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('BERITA', function (Blueprint $table) {
            $table->dropForeign(['deleted_by']);
            $table->dropForeign(['insert_by']);
            $table->dropForeign(['update_by']);
        });
    }
}
