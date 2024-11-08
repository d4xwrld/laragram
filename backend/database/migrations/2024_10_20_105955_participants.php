<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('chat_id')->unique();
            $table->string('username')->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->boolean('is_bot')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('participants');
    }
};
