<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $table="profiles";
    use HasFactory;
    protected $guarded = ['id'];

    public function projects()
    {
      return $this->hasMany(Projects::class,'profile_id');
    }

}
