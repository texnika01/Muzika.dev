<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments_songs', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->text('body');
			$table->unsignedBigInteger('songs_id');
			$table->unsignedBigInteger('user_id');
			$table->timestamps();
		});
		Schema::create('comments_texts', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->text('body');
			$table->unsignedBigInteger('texts_id');
			$table->unsignedBigInteger('user_id');
			$table->timestamps();
		});
        Schema::create('comments_styles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('body');
            $table->unsignedBigInteger('styles_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
		Schema::create('comments_events', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->text('body');
			$table->unsignedBigInteger('event_id');
			$table->unsignedBigInteger('user_id');
			$table->timestamps();
		});
		//Create ForeignCey for tables
		Schema::table('comments_songs',function (Blueprint $table){
			$table->foreign('songs_id')->references('id')->on('songs')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
		Schema::table('comments_texts',function (Blueprint $table){
			$table->foreign('texts_id')->references('id')->on('texts')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
		Schema::table('comments_styles',function (Blueprint $table){
			$table->foreign('styles_id')->references('id')->on('styles')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
		Schema::table('comments_events',function (Blueprint $table){
			$table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign('comments_songs');
		Schema::dropForeign('comments_texts');
		Schema::dropForeign('comments_styles');
		Schema::dropForeign('comment_events');

		Schema::dropIfExists('comments_songs');
		Schema::dropIfExists('comments_texts');
		Schema::dropIfExists('comments_styles');
		Schema::dropIfExists('comment_events');
    }
}
