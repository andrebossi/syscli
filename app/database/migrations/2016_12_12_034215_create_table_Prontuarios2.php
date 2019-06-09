<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProntuarios2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('prontuarios')) {
            Schema::create('prontuarios', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('paciente_id')->unsigned();
                $table->foreign('paciente_id')->references('id')->on('pacientes')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExistsIfExists('prontuarios');
    }
}
