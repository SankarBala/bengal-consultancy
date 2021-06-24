<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status')->default(1);
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('bid')->nullable();
            $table->string('dob')->nullable();
            $table->string('nid')->nullable();
            $table->string('passport')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('preferred_country')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
