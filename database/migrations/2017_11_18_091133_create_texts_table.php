<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique()->index();
            $table->string('description');
            $table->string('text_path')->nullable();
            $table->string('text')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->boolean('active')->default(1);
            $table->boolean('pay')->default(0);
            $table->timestamps();
        });
		Schema::create('genres_texts', function (Blueprint $table) {
			$table->unsignedBigInteger('texts_id');
			$table->foreign('texts_id')
				->references('id')
				->on('texts')
				->onDelete('cascade');
			$table->unsignedBigInteger('genres_id');
			$table->foreign('genres_id')
				->references('id')
				->on('genres')
				->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('texts');
        Schema::dropIfExists('genres_texts');
    }
}
