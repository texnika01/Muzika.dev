<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
	protected $fillable = ['title', 'pic_event', 'body', 'user_id', 'active', 'date_event'];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
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
        return $this->hasMany('App\Models\Comments\CommentsEvents');
	}
}
