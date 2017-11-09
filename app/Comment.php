<?php

namespace App;


class Comment extends Model
{
    public function blog(){
        return $this->belongsTo(Blog::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}