<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = [
        'name',
        'link'
    ];

    public function server()
    {
        return $this->belongsTo(Server::class);
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%'.$query.'%')
                ->orWhere('link', 'like', '%'.$query.'%');
    }
}
