<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
	protected  $table = 'songs';
	protected $fillable = [
		'image_path','song_name', 'song_artist',
		'song_path','description','user_id'
	];
	protected $date = ['published_at'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\Models\Auth\User');
	}

	/**
	 * Get the ganres associated with the given songs
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function ganres()
	{
		return $this->belongsToMany('App\Models\Pages\Genres');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function comments()
	{
		return $this->hasMany('App\Models\Comments\CommentsSong');
	}

	/**
	 * Get a List og Genres ids associate with the current article.
	 *
	 * @return array
	 */
	public function getGenresListAttribute() {
		return $this->ganres->pluck('id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function likes() {
		return $this->hasMany('App\Models\Pages\Likes');
	}

	/**
	 * @return bool
	 */
	public function getIsLikedAttribute()
	{
		$like = $this->likes()->whereUserId(Auth::id())->first();
		return (!is_null($like)) ? true : false;
	}

}
