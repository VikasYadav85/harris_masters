<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_auth', function (Blueprint $table) {
            $table->id();
            $table->string("name",20);
            $table->string("gender",20);
            $table->string("email",20);
            $table->string("password",20);
            $table->string("mobile",20);
            $table->string("address",20);
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
        Schema::dropIfExists('tbl_auth');
    }
};
