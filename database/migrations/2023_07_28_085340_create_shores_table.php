<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shores', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('location', 200);
            $table->smallInteger('tot_umbrella');
            $table->smallInteger('tot_sunbeds');
            $table->float('price_umbrella_a_day', 3,2);
            $table->date('opening_date');
            $table->date('closing_date');
            $table->boolean('beach_volley_court');
            $table->boolean('soccer_pitch');
            
            
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
        Schema::dropIfExists('shores');
    }
};
