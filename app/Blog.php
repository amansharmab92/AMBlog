<?php

namespace App;



class Blog extends Model
{
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
