<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLoans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('control_number', 30);
            $table->integer('tool_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('control_number')
                ->references('control_number')->on('students')
                ->onDelete('cascade');
            $table->foreign('tool_id')
                ->references('id')->on('tools')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
