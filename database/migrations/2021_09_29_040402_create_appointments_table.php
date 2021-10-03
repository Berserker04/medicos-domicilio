<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string("direction");
            $table->string("description");
            $table->string("cellPhone")->nullable();
            $table->string("email");
            $table->date("date")->nullable();
            $table->time("time")->nullable();
            $table->integer("client_id");
            $table->integer("doctor_id")->nullable();
            $table->integer("state");
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
        Schema::dropIfExists('appointments');
    }
}
