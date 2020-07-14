<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelasLocImoveis extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

//        Schema::create('proprietario', function (Blueprint $table) {
//
//            $table->increments('id');
//            $table->string('nome', 100)->nullable();
//            $table->string('email', 150)->unique();
//            $table->text('endereco', 500)->nullable();
//            $table->string('cidade', 100)->nullable();
//            $table->string('estado', 2)->nullable();
//            $table->string('cnpj_cpf', 20)->unique();
//            $table->string('telefone', 20)->nullable();
//            $table->timestamps();
//        });
//
//        Schema::create('corretor', function (Blueprint $table) {
//
//            $table->increments('id');
//            $table->string('nome', 100)->nullable();
//            $table->text('endereco', 500)->nullable();
//            $table->string('cidade', 100);
//            $table->string('estado', 2);
//            $table->string('cnpj_cpf', 20)->unique();
//            $table->string('telefone', 20);
//            $table->timestamps();
//        });
//
//
//        Schema::create('inquilino', function (Blueprint $table) {
//
//            $table->increments('id');
//            $table->string('nome', 100)->nullable();
//            $table->string('email', 150)->unique();
//            $table->text('endereco', 500)->nullable();
//            $table->string('cidade', 100);
//            $table->string('estado', 2);
//            $table->string('cnpj_cpf', 20)->unique();
//            $table->string('telefone', 20);
//            $table->timestamps();
//        });
//
//
//        Schema::create('imovel', function (Blueprint $table) {
//
//            $table->increments('id');
//            $table->string('nome', 100)->nullable();
//            $table->text('endereco', 500)->nullable();
//            $table->string('cidade', 100);
//            $table->string('estado', 2);
//            $table->decimal('valor', 10, 2)->nullable();
//            $table->text('condicao', 100);
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
