<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =['order_by','event_num','event_name','event_city','event_type','event_desc','event_cost','event_tickets'];
}
