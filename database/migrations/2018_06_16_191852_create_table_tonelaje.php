<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTonelaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tonelaje', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tonelaje');
<<<<<<< HEAD
            $table->integer('id_proveedor');
=======
            $table->integer('id_provedor');
>>>>>>> fadd4964ae31d235921c3578cc41362bc7e07c99
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
<<<<<<< HEAD
        Schema::dropIfExists('tonelaje');
=======
        //
>>>>>>> fadd4964ae31d235921c3578cc41362bc7e07c99
    }
}
