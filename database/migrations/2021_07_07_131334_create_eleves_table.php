<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->id()->autoIncrement()->unsigned();
            $table->char('firstName', 50);
            $table->char('lastName', 40);
            $table->char('email', 50)->nullable();
            $table->char('adress', 200);
            $table->date('birthDay');
            $table->ipAddress('ipAdress');
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
        Schema::dropIfExists('eleves');
    }
}
