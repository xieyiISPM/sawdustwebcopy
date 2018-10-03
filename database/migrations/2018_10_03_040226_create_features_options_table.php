<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features_options', function (Blueprint $table) {

            $table->integer('feature_id')->unsigned()->nullable();
            $table->foreign('feature_id')->references('id')
                ->on('features')->onDelete('cascade');

            $table->integer('option_id')->unsigned()->nullable();
            $table->foreign('option_id')->references('id')
                ->on('options')->onDelete('cascade');

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
        Schema::dropIfExists('features_options');
    }
}
