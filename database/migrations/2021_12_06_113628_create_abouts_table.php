<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->longText("content_tr");
            $table->longText("content_en");
            $table->longText("content_ar");
            $table->longText("content_ru");
            $table->longText("keywords_tr");
            $table->longText("keywords_en");
            $table->longText("keywords_ar");
            $table->longText("keywords_ru");
            $table->longText("descriptions_tr");
            $table->longText("descriptions_en");
            $table->longText("descriptions_ar");
            $table->longText("descriptions_ru");
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
        Schema::dropIfExists('abouts');
    }
}
