<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
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
            $table->string('userid');
            $table->string('name');
            $table->double('phone_ext');
            $table->string('zip_code');
            $table->string('gender');
            $table->string('dob');
            $table->double('cnic');
            $table->string('slug');
            $table->string('address');
            $table->float('sales_percentage');
            $table->double('is_fixed');
            $table->string('profile_photo_path');
            $table->string('level');
            $table->double('cell');

            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('employees');
    }
}
