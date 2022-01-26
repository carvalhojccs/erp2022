<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('is_acive', 1)->default('y');
            $table->string('is_client', 1)->nullable();
            $table->string('is_provider', 1)->nullable();
            $table->string('is_carrier', 1)->nullable();
            $table->string('name', 100);
            $table->string('fantasy_name', 100);
            $table->string('cpf', 100)->nullable();
            $table->string('phone', 10)->nullable();
            $table->string('cell', 10)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('password', 15);
            $table->string('cep', 10)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('number', 15)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('complement', 100)->nullable();
            $table->string('district', 50)->nullable();
            $table->string('rg', 20)->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
