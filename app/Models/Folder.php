<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    protected $table = "folder";
    protected $guarded = ['id'];

    public function cloud(){ 
        return $this->belongsTo(Cloud::class);
        }

    public function file(){
        return $this->hasMany(File::class);
    }
}
