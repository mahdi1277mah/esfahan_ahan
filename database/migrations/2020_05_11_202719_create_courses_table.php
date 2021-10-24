<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->string('title');
            $table->string('e_name')->nullable();
            $table->string('type',10);
            $table->string('slug');
            $table->text('body');
            $table->string('price',50);
            $table->string('discount',50);
            $table->string('tags');
            $table->text('images')->nullable();
            $table->text('videos')->nullable();
            $table->string('time',15)->default('00:00:00');
            $table->string('view_count')->default(0);
            $table->string('comment_count')->default(0);
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
        Schema::dropIfExists('courses');
    }
}
