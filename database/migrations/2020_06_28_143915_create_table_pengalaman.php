<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePengalaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman', function (Blueprint $table) {
            $table->increments('pengalaman_id');
            $table->string('nama', 128);
            $table->string('jabatan', 128);
            $table->text('deskripsi');
            $table->string('dari', 128)->nullable();
            $table->string('sampai', 128)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengalaman', function (Blueprint $table) {
            //
        });
    }
}
