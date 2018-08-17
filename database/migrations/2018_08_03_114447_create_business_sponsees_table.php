<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessSponseesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_sponsees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 250);
            $table->string('logo');
            $table->string('oneLiner',250);
            $table->string('description',1000);
            $table->string('what_we_offer',1000);
            $table->string('what_should_sponsors_expect',1000);
            $table->integer('industry');
            $table->float('rating');
            $table->string('total_funded');
            $table->string('total_projects');
            $table->json('financials');
            $table->json('stats_industry_distribution');
            $table->json('stats_funding_distribution');
            $table->string('links_to_sponsorship_assets');
            $table->string('ROI');
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
        Schema::dropIfExists('business_sponsees');
    }
}
