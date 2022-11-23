<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_producto')->nullable(false);
            $table->decimal('precio_compra', $precision=(8),$escala=(2))->nullable(false);
            $table->string('descripcion')->nullable(false);
            $table->integer('estado')->unsigned()->nullable();
            $table->integer('Stock')->unsigned()->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('productos');
    }
};
