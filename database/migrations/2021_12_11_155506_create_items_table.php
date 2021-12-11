<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('disabled_at')->nullable(true);
            $table->unsignedBigInteger('user')->nullable(false);
            $table->foreign('user')->on('users')->references('id');
            $table->unsignedBigInteger('part')->nullable(false);
            $table->foreign('part')->on('body_parts')->references('id');
            $table->string('photo');
            $table->unsignedBigInteger('style');
            $table->foreign('style')->on('styles')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
