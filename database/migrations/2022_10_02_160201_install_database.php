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
        Schema::disableForeignKeyConstraints();
     
        Schema::dropIfExists('nguoidung');
        Schema::dropIfExists('xe');
       
        Schema::create('nguoidung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->boolean('role');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('xe', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenxe',255);
            $table->string('danhmuc',255);
            $table->string('img',255);
            $table->double('dongia',10,0)->default(0);
            $table->text('mota');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::enableForeignKeyConstraints();
    }
};
