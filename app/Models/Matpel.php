<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matpel extends Model
{
    use HasFactory;
    protected $table ="matapelajaran";
    protected $guarded=[];

    public function guru()
    {
        return $this->hasOne(User::class);
    }
}
