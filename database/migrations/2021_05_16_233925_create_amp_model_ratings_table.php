<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmpModelRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amp_model_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('amp_model_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->decimal('rating', 2, 1);
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
        Schema::dropIfExists('amp_model_ratings');
    }
}
