<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'start_date', 'added_by', 'published', 'published_date'
    ];

    protected $dates = ['start_date', 'published_date'];

    public function user(Type $var = null)
    {
        $this->belongsTo(User::class);
    }
}
