<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //migration
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default("Ting");
            $table->string('email');
            $table->boolean('sex')->default(true); // true = boy, false = girl. 
            $table->string('personality')->nullable();
            $table->decimal("salary")->default(22000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //roll back會用到
    {
        Schema::dropIfExists('posts');
    }
}
