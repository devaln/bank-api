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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('education');
            $table->date('date_of_joining');
            $table->string('designation');
            $table->string('official_email');
            $table->boolean('status')->default(0)->comment('1 = Active and 0 = deactive');
            $table->morphs('employable');
            $table->unsignedBigInteger('customer_id')->index();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->timestamps();

        });

    }


    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
