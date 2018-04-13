<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGauravTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // dd(Schema::hasTable('users')); 
            //
        Schema::create('gaurav', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            /*$table->char('email',255);
            $table->date('dob');
            $table->enum('device_type',['1','2']);
            $table->bigInteger('user_type');
            $table->text('store_sr_no');
            $table->integer('is_premium_user');
            $table->timestamps();
            $table->rememberToken();*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gaurav');
    }
}
