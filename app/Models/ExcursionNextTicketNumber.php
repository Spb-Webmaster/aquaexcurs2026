<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExcursionNextTicketNumber extends Model
{
    protected $table = 'excursion_next_ticket_numbers';
    protected $fillable = ['next_value'];
}
