<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePujasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pujas', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad');
            $table->string('nombre');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('coche_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pujas');
    }
}
