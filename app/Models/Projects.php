<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public $table="projects";
    use HasFactory;
    protected $guarded = ['id'];
    public function brand()
    {
      return $this->belongsTo(Brand::class,'brand_id');
    }
    public function profile()
    {
        return $this->belongsTo(Profile::class,'profile_id');
    }
    public function glass()
    {
        return $this->belongsTo(Glass::class,'glass_id');
    }
}
