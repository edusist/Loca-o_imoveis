<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabAluguel extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
//        
//        Schema::create('aluguel', function(Blueprint $table) {
//
//            $table->increments('id');
//            $table->timestamps();
//            $table->integer('proprietario_id')->nullable()->unsigned();
//            $table->foreign('proprietario_id')
//                    ->references('id')
//                    ->on('proprietario')
//                    ->onUpdate('cascade')
//                    ->onDelete('cascade');
//
//            $table->integer('corretor_id')->nullable()->unsigned();
//            $table->foreign('corretor_id')
//                    ->references('id')
//                    ->on('corretor')
//                    ->onUpdate('cascade')
//                    ->onDelete('cascade');
//
//            $table->integer('inquilino_id')->nullable()->unsigned();
//            $table->foreign('inquilino_id')
//                    ->references('id')
//                    ->on('inquilino')
//                    ->onUpdate('cascade')
//                    ->onDelete('cascade');
//            
//             $table->integer('imovel_id')->nullable()->unsigned();
//            $table->foreign('imovel_id')
//                    ->references('id')
//                    ->on('imovel')
//                    ->onUpdate('cascade')
//                    ->onDelete('cascade');
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
