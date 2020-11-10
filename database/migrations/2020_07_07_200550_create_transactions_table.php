<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_mahasiswa')->nullable();
            $table->unsignedBigInteger('id_stuff')->nullable();
            $table->unsignedBigInteger('id_category')->nullable();
            $table->integer('total_stuff')->nullable();
            $table->timestamps();


            $table->foreign('id_mahasiswa')->references('id')
            ->on('mahasiswa')->onDelete('cascade');
            $table->foreign('id_category')->references('id')
            ->on('categories')->onDelete('cascade');
            $table->foreign('id_stuff')->references('id')
            ->on('stuffs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
