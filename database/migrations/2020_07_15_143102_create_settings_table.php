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
            $table->string('logo')->nullable();
            $table->string('slide_1')->nullable();
            $table->string('slide_2')->nullable();
            $table->string('navbar')->nullable();
            $table->string('samandehi')->nullable();
            $table->string('enemad')->nullable();
            $table->string('footer_1')->nullable();
            $table->string('footer_2')->nullable();
            $table->string('footer_3')->nullable();
            $table->string('footer_4')->nullable();
            $table->string('footer_5')->nullable();
            $table->string('telegram_link')->nullable();
            $table->string('google_link')->nullable();
            $table->string('linkdin_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('facebook_link')->nullable();
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
