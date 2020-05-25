<?php

namespace Zeropingheroes\Lanager;

use Illuminate\Database\Eloquent\Model;

class LanGame extends Model
{
    protected $fillable = [
        'lan_id',
        'game_name',
        'created_by',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function lan()
    {
        return $this->belongsTo('Zeropingheroes\Lanager\Lan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Zeropingheroes\Lanager\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function votes()
    {
        return $this->hasMany('Zeropingheroes\Lanager\LanGameVote');
    }
}