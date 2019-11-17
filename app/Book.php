<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    protected $fillable = ['name','genre','summary','pages','author_id','publishing_house_id'];

    public function author(){
        $this->belongsTo('App\Author');
    }
    public function publishingH(){
        $this->belongsTo('App\PublishingHouse');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
