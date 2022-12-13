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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->enum('title', ['Debit-card', 'Credit-card']);
            $table->bigInteger('number');
            $table->date('expiry_date');
            $table->bigInteger('pin');
            $table->bigInteger('cvv_code');
            $table->boolean('status')->default(0)->comment('1 = Active and 0 = deactive');
            /* Relational keys */
            $table->unsignedBigInteger('customer_id')->index();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('user_info_id')->index();
            $table->foreign('user_info_id')->references('id')->on('user_informations')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cards');
    }
};
