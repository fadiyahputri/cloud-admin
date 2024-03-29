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
        Schema::create('cloud', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('folder_name')->unique();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cloud');
    }
};
