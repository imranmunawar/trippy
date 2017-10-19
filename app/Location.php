<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['region', 'state', 'city', 'country'];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'locations';

    /**
     * Get the post that owns the comment.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_locations', 'user_id', 'location_id');
    }
}
