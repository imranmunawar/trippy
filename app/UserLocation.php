<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLocation extends Model
{
    protected $fillable = ['user_id', 'location_id'];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'location_user';
}
