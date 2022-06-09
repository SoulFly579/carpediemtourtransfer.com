<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->longText("facebook_link")->nullable();
            $table->longText("twitter_link")->nullable();
            $table->longText("tiktok_link")->nullable();
            $table->longText("instagram_link")->nullable();
            $table->longText("youtube_link")->nullable();
            $table->longText("whatsapp_link")->nullable();
            $table->longText("contact_number")->nullable();
            $table->boolean("maintenance")->default(false);
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
        Schema::dropIfExists('settings');
    }
}
