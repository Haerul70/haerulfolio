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
        Schema::table('about', function (Blueprint $table) {
            $table->string('degree')->after('bio');
            $table->string('phone')->after('degree');
            $table->string('address')->after('phone');
            $table->string('city')->after('address');
            $table->string('country')->after('city');
            $table->string('birthday')->after('country');
            $table->string('email')->after('birthday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about', function (Blueprint $table) {
            //
        });
    }
};
