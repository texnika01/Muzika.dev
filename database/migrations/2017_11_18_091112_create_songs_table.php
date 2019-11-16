<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_path')->default('no_image.jpg');
            $table->string('song_name')->unique()->index();
            $table->string('song_artist');
            $table->string('song_path');
            $table->string('description');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->boolean('active')->default(1);
            $table->boolean('pay')->default(0);
            $table->timestamps();
        });
		Schema::create('genres_songs', function (Blueprint $table) {
			$table->unsignedBigInteger('genres_id')->index();
			$table->foreign('genres_id')
				->references('id')->on('genres')
				->onDelete('cascade');
			$table->unsignedBigInteger('songs_id')->index();
			$table->foreign('songs_id')
				->references('id')->on('songs')
				->onDelete('cascade');

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
        Schema::dropIfExists('songs');
        Schema::dropIfExists('genres_songs');
    }
}
