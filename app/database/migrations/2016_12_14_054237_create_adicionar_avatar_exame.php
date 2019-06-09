<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdicionarAvatarExame extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('exames', function (Blueprint $table) {
           $table->string('avatar')->default("../../public/imagens/misc/exame_coracao.jpg");
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exames', function($table) {
            $table->dropColumn('avatar');
        });
    }
}
