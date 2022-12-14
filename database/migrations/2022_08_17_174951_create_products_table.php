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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sabor');
            $table->float('preco');
            $table->string('foto');
            $table->string('descricao');
            //$table->foreignId('stock_id')->constrained();
            /*$table->unsignedBigInteger('stock_id');
            $table->foreign('stock_id')->references('id')->on('stocks');*/
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
        Schema::dropIfExists('products');
    }
};
