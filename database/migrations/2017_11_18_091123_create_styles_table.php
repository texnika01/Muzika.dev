<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruments', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name')->unique()->index();
			$table->string('description');
			$table->timestamps();
		});

        Schema::create('styles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique()->index();
            $table->string('description');
			$table->string('styles_path');
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade');
			$table->boolean('active')->default(1);
            $table->boolean('pay')->default(0);
            $table->timestamps();
        });
		Schema::create('genres_styles', function (Blueprint $table) {
			$table->unsignedBigInteger('styles_id');
			$table->foreign('styles_id')
				->references('id')
				->on('styles')
				->onDelete('cascade');
			$table->unsignedBigInteger('genres_id');
			$table->foreign('genres_id')
				->references('id')
				->on('genres')
				->onDelete('cascade');
		});
		Schema::create('instrument_styles', function (Blueprint $table) {
			$table->unsignedBigInteger('styles_id');
			$table->foreign('styles_id')
				->references('id')
				->on('styles')
				->onDelete('cascade');
			$table->unsignedBigInteger('instrument_id');
			$table->foreign('instrument_id')
				->references('id')
				->on('instruments')
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
        Schema::dropIfExists('instruments');
        Schema::dropIfExists('styles');
        Schema::dropIfExists('genres_styles');
        Schema::dropIfExists('instrument_styles');
    }
}
