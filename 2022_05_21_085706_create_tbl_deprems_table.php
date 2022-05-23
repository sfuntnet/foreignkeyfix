<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDepremsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  Schema::disableForeignKeyConstraints();
        Schema::create('tbl_deprems', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('depremlive_id');
            $table->unsignedBigInteger('yorum_id');
            $table->foreign('yorum_id')->on('tbl_yorums')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('tbl_deprems');
        Schema::enableForeignKeyConstraints();
    }
}
