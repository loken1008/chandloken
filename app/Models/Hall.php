<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $table='hall_tbl';
    protected $fillable=['hall_name'];
    protected $guarded = [];
    public function states(){
        return $this->hasMany('App\Branch', 'b_id');
    }
    
}
