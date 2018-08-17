<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyArrangementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_arrangements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 250);
            $table->string('partner_title', 250);
            $table->integer('status')->default(0);
            $table->string('partner_logo');
            $table->integer('roi_3m');
            $table->integer('roi_6m');
            $table->integer('roi_ytd');
            $table->json('messages');
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
        Schema::dropIfExists('my_arrangements');
    }
}
