<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignCombination extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $entity = 'combinations';
        if (Schema::hasTable($entity)) {
            Schema::table($entity, function (Blueprint $table) {
                $table->foreign('user', 'combination-user_x_users-id')->on('users')->references('id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_combination');
        Schema::dropForeign('combination-user_x_users-id');
    }
}
