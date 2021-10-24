<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('img')->nullable();
            $table->string('name');
            $table->boolean('is_superuser')->default(0);
            $table->boolean('is_staff')->default(0);
            $table->boolean('is_member')->default(1);
            $table->boolean('vendor')->default(0);
            $table->string('wallet')->default(0);
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('username')->nullable();
            $table->string('birth_year')->nullable();
            $table->string('birth_month')->nullable();
            $table->string('birth_day')->nullable();
            $table->string('title_job')->nullable();
            $table->text('about_us')->nullable();
            $table->string('website')->nullable();
            $table->string('telegram_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->timestamp('viptime')->default(\Illuminate\Support\Facades\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
