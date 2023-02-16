<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_lists', function (Blueprint $table) {
            $table->id();
            $table->string('user_name')->nullable();
            $table->string('user_cpf')->nullable();
            $table->string('user_rg')->nullable();
            $table->string('user_phone')->nullable();
            $table->date('user_birthdate')->nullable();
            $table->string('user_estadocivil')->nullable();
            $table->string('cep')->nullable();
            $table->string('address')->nullable();
            $table->string('complement')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
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
        Schema::dropIfExists('tb_list');
    }
}
