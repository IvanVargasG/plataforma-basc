<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConductor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('conductores', function (Blueprint $table) {
          $table->string('documento', 15)->unique();
          $table->string('nombres');
          $table->string('apellidos');
          $table->string('email');
          $table->string('dirrecion');
          $table->string('telefono', 12)->nullable();
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
        Schema::dropIfExists('conductores');
    }
}
