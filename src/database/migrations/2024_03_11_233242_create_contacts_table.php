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
            $table->bigInteger('contact_id');
            $table->unsignedBigInteger('department_id');
            $table->string('name', 20)->nullable(false);
            $table->string('email', 255);
            $table->string('content', 1000)->nullable(false);
            $table->integer('age')->nullable(false);
            $table->integer('gender')->nullable(false);
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
