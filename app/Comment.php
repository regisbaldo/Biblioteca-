<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['text','book_id'];

    public function book(){
        return $this->belongsTo('App\Book');
    }

    
}
