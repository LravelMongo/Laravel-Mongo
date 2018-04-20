<?php

namespace App\HasManyThrough\Model;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = 'countries';

    public function posts()
    {
        return $this->hasManyThrough('App\HasManyThrough\Model\Post', 'App\HasManyThrough\Model\User','country_id', 'user_id', 'id');

        //The third argument is the name of the foreign key on the intermediate model, the fourth argument is the name of the foreign key on the final model, and the fifth argument is the local key:
    }
}
