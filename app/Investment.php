<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = ['user_id','amount', 'investment_time', 'status', 'profit_rate', 'profit'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function withdraw()
    {
        return $this->belongsToMany(Withdraw::class)->withTimestamps();
    }
}
