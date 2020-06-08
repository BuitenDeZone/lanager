<?php

namespace Zeropingheroes\Lanager;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
/* @mixin Eloquent */

class Session extends Model
{
    protected $dates = [
        'last_activity',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo('Zeropingheroes\Lanager\User');
    }
}
