<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorshipAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsorship_assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 250);
            $table->string('photo');
            $table->integer('price');
            $table->float('rating');
            $table->integer('average_roi');
            $table->integer('total_spent');
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
        Schema::dropIfExists('sponsorship_assets');
    }
}
