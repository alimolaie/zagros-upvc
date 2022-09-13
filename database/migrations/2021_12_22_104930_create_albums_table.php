<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('name_album');
            $table->string('name_nohe');
            $table->string('image');
            $table->string('filenames');
            $table->bigInteger('madah_id')->unsigned();
            $table->foreign('madah_id')->references('id')->on('madahs')->onDelete('cascade');;
            $table->bigInteger('monasebat_id')->unsigned();
            $table->foreign('monasebat_id')->references('id')->on('mona_sebats')->onDelete('cascade');
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
        Schema::dropIfExists('albums');
    }
}
