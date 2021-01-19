<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branchbook extends Model
{
    use HasFactory;
    protected $table='hallbook';
    protected $fillable=['branchname','hallname','date','start_time','end_time','reason','booked_by','status'];
   
}
