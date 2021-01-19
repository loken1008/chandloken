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
    public function subcategories(){
        return $this->hasMany('App\Category', 'b_id');
    }
    
}
