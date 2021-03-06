<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cracks', function (Blueprint $table) {
            $table->id();
            $table->string('CrackTitle');
            $table->string('Slug');
            $table->string('Category');
            $table->string('IntroText');
            $table->longText('Description');
            $table->string('FeaturedImage');
            $table->string('Status')->default(0);
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
        Schema::dropIfExists('cracks');
    }
}
