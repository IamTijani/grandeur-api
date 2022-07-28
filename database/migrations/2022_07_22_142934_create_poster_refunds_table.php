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
        Schema::create('poster_refunds', function (Blueprint $table) {
            $table->id();
            $table->string('matricNo');
            $table->string('email');
            $table->string('subject');
            $table->string('file_id');
            $table->string('paycode');
            $table->string('amount');
            $table->text('desc');
            $table->string('status')->default("pending");
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
        Schema::dropIfExists('poster_refunds');
    }
};
