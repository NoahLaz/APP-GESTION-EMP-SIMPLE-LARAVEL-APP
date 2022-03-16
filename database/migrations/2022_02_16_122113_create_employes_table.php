<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->integer('registration_number')->nullable(false)->unique();
            $table->string('fullname')->nullable(false);
            $table->string('email')->nullable(false)->unique();
            $table->string('depart')->nullable(false);
            $table->date('hire_date')->nullable(false);
            $table->integer('phone')->nullable(false);
            $table->string('address');
            $table->string('city');
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
        Schema::dropIfExists('employes');
    }
}
