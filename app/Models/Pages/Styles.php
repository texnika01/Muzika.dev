<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Styles extends Model
{
    protected $table = 'styles';
    protected $fillable = [
		'name','description',
		'styles_path','active','user_id'
    	];
	/**
	 *Get the user associated with the given styles
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function user()
	{
		return $this->belongsTo('App\Models\Auth\User');
	}

	/**
	 * Get the ganres associated with the given styles
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function ganres()
	{
		return $this->belongsToMany('App\Models\Pages\Genres');
	}

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comments\CommentsStyle');
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
	 * Get the instrument associated with the given styles
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function instruments()
	{
		return $this->belongsToMany('App\Models\Pages\Instrument');
	}
}
