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
        Schema::create('user_informations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('contact');
            $table->date('date_of_birth');
            $table->enum('gender',['Male','Female','Other']);
            $table->enum('maritial_status',['Unmarried','Married','Divorced']);
            $table->string('adhaar_card_number');
            $table->string('pan_card_number');
            $table->string('image')->nullable();
            $table->boolean('status')->default(0)->comment('1 = Active and 0 = deactive');
            /* Relational keys */
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->morphs('userable');
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
        Schema::dropIfExists('user_informations');
    }
};
