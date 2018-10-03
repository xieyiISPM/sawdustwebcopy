<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_feature', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->integer('room_id')->unsigned()->nullable();
            $table->foreign('room_id')->references('id')
                ->on('rooms')->onDelete('cascade');

            $table->integer('feature_id')->unsigned()->nullable();
            $table->foreign('feature_id')->references('id')
                ->on('features')->onDelete('cascade');

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
        Schema::dropIfExists('room_feature');
    }
}
