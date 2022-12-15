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
            $table->boolean('work_status');
            $table->string('designation');
            $table->string('official_email');
            $table->boolean('status')->default(0)->comment('1 = Active and 0 = deactive');
            $table->timestamps();
        });

        //     $table->foreign('address_id')->references('id')->on('address')->onDelete('cascade');
    }


    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
