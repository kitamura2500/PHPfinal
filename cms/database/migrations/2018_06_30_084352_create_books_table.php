<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name');
            $table->integer('item_number');
            $table->integer('item_amount');
            $table->dateTime('published');
            $table->timestamps();
            
            // $table->string('name', 100);
            // $table->integer('price');
            // $table->text('description');
            // $table->dateTime('created_at');
            // $table->timestamps();
            // $table->boolean('confirmed');
            // $table->json('meta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
