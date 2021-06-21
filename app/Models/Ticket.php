<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['event_id',
    'holder_name',
    'holder_email',
    'holder_phone',
    'payment_method',
    'ticket_code',
    'description',
    'price',];
}
