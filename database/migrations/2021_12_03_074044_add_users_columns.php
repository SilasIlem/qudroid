<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('phone_no');
            $table->integer('age');
            $table->string('address');
            $table->string('nationality');
            $table->string('bio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('phone_no');
            $table->dropColumn('age');
            $table->dropColumn('address');
            $table->dropColumn('nationality');
            $table->dropColumn('bio');
        });
    }
}
