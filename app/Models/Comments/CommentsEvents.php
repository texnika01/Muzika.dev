<?php

namespace App\Models\Comments;

use Illuminate\Database\Eloquent\Model;

class CommentsEvents extends Model
{
    /**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function user() {
		return $this->belongsTo('App\Models\Auth\User');
	}

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function events()
    {
        return $this->belongsTo('App\Models\Pages\Event');
	}
}
