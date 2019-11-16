<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $table = 'likes';
	protected $fillable = [
		'user_id','text_id','song_id','style_id','like_type'
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() {
		return $this->belongsTo('App\Models\Auth\User');
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function text() {
		return $this->hasMany('App\Models\Pages\Texts');
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function song() {
		return $this->hasMany('App\Models\Pages\Songs');
    }
}
