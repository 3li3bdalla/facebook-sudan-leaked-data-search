<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('facebook_id')->nullable(); //0
            $table->text('birth_day')->nullable(); //2
            $table->text('phone_number')->nullable(); //3
            $table->text('first_name')->nullable(); // 6
            $table->text('last_name')->nullable();// 7
            $table->text('female')->nullable(); // 8
            $table->text('profile_url')->nullable(); // 9
            $table->text('locale')->nullable(); // 10
            $table->text('username')->nullable(); //11
            $table->text('full_name')->nullable(); //12
            $table->text('company')->nullable(); //13
            $table->text('job_title')->nullable(); //14
            $table->text('address')->nullable(); // 15
            $table->text('city')->nullable(); //16
            $table->text('university')->nullable(); //17
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
        Schema::dropIfExists('users');
    }
}
