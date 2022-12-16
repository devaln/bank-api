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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->float('ammount');
            $table->text('description')->nullable();
            /* Relational keys */
            $table->unsignedBigInteger('sender_id')->index();
            $table->foreign('sender_id')->references('id')->on('user_informations')->onDelete('cascade');
            $table->unsignedBigInteger('reciever_id')->index();
            $table->foreign('reciever_id')->references('id')->on('user_informations')->onDelete('cascade');
            // $table->unsignedBigInteger('card_id')->index();
            // $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
