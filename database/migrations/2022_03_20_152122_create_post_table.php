<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_product', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->index();
            $table->string('slug', 100)->index();
            $table->text('content');
            $table->text('image');
            $table->boolean('draft')->default(false);
            // $table->timetamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('our_product');
    }
}
