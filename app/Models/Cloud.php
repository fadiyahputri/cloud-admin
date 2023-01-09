<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloud extends Model
{
    protected $table ="cloud";
    protected $guarded=['id'];

    public function RelationToUser(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function RelationToFolder(){ 
        return $this->hasMany('App\Models\Folder');
        }
}
