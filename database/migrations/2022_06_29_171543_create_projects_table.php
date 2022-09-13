<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('height');
            $table->string('weight');
            $table->string('full_name');
            $table->string('mobile');
            $table->string('nationality_code');
            $table->text('address');
            $table->unsignedBigInteger('glass_id');
          //  $table->foreign('glass_id')->references('id')->on('glasses')->onDelete('cascade');
            $table->unsignedBigInteger('profil_id');
            $table->unsignedBigInteger('brand_id');
         //   $table->foreign('profil_id')->references('id')->on('header')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
