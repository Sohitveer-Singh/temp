<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUserTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('gender')->nullable();
            $table->date('dob')->nullable();
            $table->float('height')->nullable();
            $table->string('color')->nullable();
            $table->string('education')->nullable();
            $table->string('profession')->nullable();
            $table->float('income')->nullable();
            $table->string('parents_details')->nullable();
            $table->string('siblings_details')->nullable();
            $table->text('other')->nullable();
            $table->text('miscellaneous')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'gender',
                'dob',
                'height',
                'color',
                'education',
                'profession',
                'income',
                'parents_details',
                'siblings_details',
                'other',
                'miscellaneous',
            ]);
        });
    }
}
