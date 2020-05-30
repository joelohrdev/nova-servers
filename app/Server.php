<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = [
        'name',
        'ip',
        'link'
    ];

    public function domains()
    {
        return $this->hasMany(Domain::class);
    }
}
