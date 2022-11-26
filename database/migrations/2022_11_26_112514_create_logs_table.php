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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();

            $table->string('action')->nullable();;
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('facultyNumber')->nullable();
            $table->string('role')->nullable();
            $table->string('position')->nullable();
            $table->string('date_time')->nullable();;

            
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
        Schema::dropIfExists('logs');
    }
};
