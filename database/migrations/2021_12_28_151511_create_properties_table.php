<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->string('type');
            $table->string('slug');
            $table->string('name');
            $table->string('property_type');
            $table->string('property_subtype');

            $table->string('address');
            $table->float('size');
            $table->float('size_unit');
            $table->double('price');
            $table->string('description');
            $table->dateTime('expired_at');
            $table->dateTime('is_active');
            $table->dateTime('active_at');
            $table->string('status');
            $table->string('duration');

            $table->dateTime('built_in year');
            $table->string('no_of_beds');
            $table->string('no_of_bathrooms');
            $table->string('total_parking_space');

            $table->double('down_payment');
            $table->double('security_deposit');
            $table->double('maintenance_charges');

            $table->string('currency');

            $table->string('lat');
            $table->string('lng');
            $table->string('rank');
            $table->double('phone_number');
            $table->double('whatsapp_number');

            $table->timestamps();
            $table->foreignId('employee_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
