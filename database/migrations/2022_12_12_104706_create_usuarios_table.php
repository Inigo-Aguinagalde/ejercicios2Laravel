<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name')->nullable();;
            $table->string('lastName', 64)->nullable();;
            $table->string('DNI')->nullable();
            $table->string('email')->nullable();
            $table->string('sexo')->nullable();
            $table->string('Discapacidad');
            $table->date('date')->nullable();
            
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
