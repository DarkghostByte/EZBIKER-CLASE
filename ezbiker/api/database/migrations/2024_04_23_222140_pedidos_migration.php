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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->string('code');
            $table->string('country');
            $table->string('state');
            $table->string('phone');
            $table->string('references');
            $table->string('status');
            $table->decimal('total');

            $table->integer('id_user')->unsigned();
            $table->foreign("id_user")->references('id')->on('user');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("pedidos");
    }
};
