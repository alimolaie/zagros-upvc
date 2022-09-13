<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public $table="traks";
    use HasFactory;
    public function madah()
    {
        $this->belongsTo(Madah::class,'madah_id');
    }
}
