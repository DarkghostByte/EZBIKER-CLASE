<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos_pedidos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('id_pedido')->unsigned();
            $table->foreign("id_pedido")->references('id')->on('pedidos');

            $table->integer('id_product')->unsigned();
            $table->foreign("id_product")->references('id')->on('pproducts');

            $table->double('cantidad');
            $table->decimal('precio');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("productos_pedidos");
    }
};
