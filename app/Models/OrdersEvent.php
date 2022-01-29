<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersEvent extends Model
{
    protected $fillable = ['pay_status'];
    use HasFactory;
}
