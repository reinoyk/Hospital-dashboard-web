<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('general_ratings', function (Blueprint $table) {
            $table->integer('rating'); // Store the rating (1-5)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('general_ratings');
    }
}
