<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    public $timestamps = false;
    protected $table = 'notes';

    protected $fillable = [
        'title','body','book_id'
    ];
}
