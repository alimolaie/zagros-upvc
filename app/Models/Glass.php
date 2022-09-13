<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glass extends Model
{
    public $table="glasses";
    use HasFactory;
    protected $guarded = ['id'];

    public function projects()
    {
       return $this->hasMany(Projects::class,'glass_id');
    }
}
