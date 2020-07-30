<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_users', function (Blueprint $table) {
            $table->increments('id');
            /* basic info */
            $table->string('gender');
            $table->string('interest');
            $table->date('birth');
            //$table->string('sign');
            $table->string('looking');
            /* Location */
            $table->string('city');
            $table->string('country');
            /* Physical Description */
            $table->string('height');
            $table->string('body');
            $table->string('looks');
            $table->string('hair');
            $table->string('eye');
            /* Lifestyle */
            $table->string('relationship');
            $table->string('havechild');
            $table->string('wantchild');
            $table->string('diet');
            $table->string('drinking');
            $table->string('smoking');
            $table->string('education');
            $table->string('occupation1');
            $table->string('occupation2');
            $table->string('income');
            $table->string('religion');
            $table->string('ethincity');
            $table->string('homelang');
            $table->string('otherlang');
            /* Datetime */
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
        Schema::dropIfExists('about_users');
    }
}
