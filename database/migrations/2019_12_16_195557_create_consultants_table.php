<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cpf')->nullable();
            $table->string('name');
            $table->string('email')->nullable();
            $table->date('birth')->nullable();
            $table->string('phone01')->nullable();
            $table->string('phone02')->nullable();
            $table->string('cep')->nullable();
            $table->string('address')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('uf')->nullable();
            $table->string('bank')->nullable();
            $table->string('bankAgency')->nullable();
            $table->string('bankAccount')->nullable();
            $table->string('bankTypeAccount')->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('consultants');
    }
}
