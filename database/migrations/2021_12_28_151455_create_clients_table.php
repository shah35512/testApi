<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->double('phone_ext');
            $table->double('phone_number');
            $table->double('zip_code');
            $table->string('website');
            $table->string('address');
            $table->string('type');
            $table->string('rating');
            $table->double('cnic');
            $table->double('fax');
            $table->double('cell');
            $table->string('occupation');
            $table->string('buying_intent');
            $table->string('income_currency');
            $table->double('income_min');
            $table->double('income_max');
            $table->string('interest');

            $table->foreignId('employees_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
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
        Schema::dropIfExists('clients');
    }
}
