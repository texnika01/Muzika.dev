<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    protected $table = 'instruments';

    protected $fillable = ['name','description'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function ganres()
    {
        return $this->belongsToMany('App\Models\Pages\Genres') ;
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function style() {
        return $this->belongsToMany('App\Models\Pages\Styles');
    }
}
