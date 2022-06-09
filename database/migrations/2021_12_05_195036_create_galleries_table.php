<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->longText("image");
            $table->unsignedBigInteger("article_id")->nullable();
            $table->unsignedBigInteger("service_id")->nullable();

            $table->foreign("article_id")->references("id")->on("articles")->onDelete("cascade");
            $table->foreign("service_id")->references("id")->on("services")->onDelete("cascade");

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
        Schema::dropIfExists('galleries');
    }
}
