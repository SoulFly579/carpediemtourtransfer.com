<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string("title_tr");
            $table->string("title_en");
            $table->string("title_ar");
            $table->string("title_ru");
            $table->string("subcontent_tr");
            $table->string("subcontent_en");
            $table->string("subcontent_ar");
            $table->string("subcontent_ru");
            $table->longText("content_tr");
            $table->longText("content_en");
            $table->longText("content_ar");
            $table->longText("content_ru");
            $table->string("keywords_tr");
            $table->string("keywords_en");
            $table->string("keywords_ar");
            $table->string("keywords_ru");
            $table->string("descriptions_tr");
            $table->string("descriptions_en");
            $table->string("descriptions_ar");
            $table->string("descriptions_ru");
            $table->string("slug_tr");
            $table->string("slug_en");
            $table->string("slug_ar");
            $table->string("slug_ru");
            $table->longText("title_image");
            $table->boolean("is_active")->default(1)->comment("1: active, 2: deactive");
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
        Schema::dropIfExists('services');
    }
}
