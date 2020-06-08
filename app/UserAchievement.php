<?php

namespace Zeropingheroes\Lanager;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
/* @mixin Eloquent */

class UserAchievement extends Model
{
    protected $fillable = [
        'user_id',
        'achievement_id',
        'lan_id',
    ];

    protected $with = [
        'lan',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo('Zeropingheroes\Lanager\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function achievement()
    {
        return $this->belongsTo('Zeropingheroes\Lanager\Achievement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function lan()
    {
        return $this->belongsTo('Zeropingheroes\Lanager\Lan');
    }
}
