<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->enum('catagory',['concert','exhibition','event_online','festival','workshop']);
            $table->string('image');
            $table->string('hosted_by');
            $table->date('event_date');
            $table->string('event_time');
            $table->string('location');
            $table->text('event_description');
            $table->text('terms_and_condition');
            $table->string('status');
            $table->string('number_of_ticket');
            $table->string('price');
            $table->text('ticket_description');
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
        Schema::dropIfExists('events');
    }
}
