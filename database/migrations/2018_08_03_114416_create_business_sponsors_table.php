<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_sponsors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 250);
            $table->string('logo');
            $table->string('oneLiner',250);
            $table->string('description',1000);
            $table->string('sponsorship_experience',1000);
            $table->integer('industry');
            $table->string('preferred_sponsees');
            $table->float('rating');
            $table->string('total_funded');
            $table->string('total_projects');
            $table->json('financials');
            $table->json('stats_industry_distribution');
            $table->json('stats_geo_distribution');
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
        Schema::dropIfExists('business_sponsors');
    }
}
