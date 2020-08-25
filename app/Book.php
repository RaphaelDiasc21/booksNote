<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    public $timestamps = false;
    protected $table = 'books';

    protected $fillable = [
        'title','subject','user_id'
    ];

    public function notes()
    {
        return $this->hasMany(App\Notes::class);
    }
}
