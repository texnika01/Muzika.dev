<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $table = 'genres';
    protected $fillable = [ 'name', 'description','user_id' ];

	/**
	 * @return mixed
	 */
	public function getPosterUsername()
    {
        return User::where( 'id', $this->user_id )->first()->first_name;
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function users()
    {
        return $this->belongsTo( 'App\Models\Auth\User', 'user_id' );
    }

    /**
     * Get the songs associated with the given genres
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function songs()
    {
        return $this->belongsToMany('App\Models\Pages\Songs');
    }

    /**
     * Get the songs associated with the given genres
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function text()
    {
        return $this->belongsToMany('App\Models\Pages\Texts');
    }
	/**
	 * Get the songs associated with the given genres
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function styles()
	{
		return $this->belongsToMany('App\Models\Pages\Styles');
	}

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function events()
    {
        return $this->belongsToMany('App\Models\Pages\Event');
	}
}
