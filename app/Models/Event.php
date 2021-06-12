<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['event_name','catagory','image','hosted_by','event_date','event_time','location','event_description','terms_and_condition','status','number_of_ticket','price','ticket_description'];
}
