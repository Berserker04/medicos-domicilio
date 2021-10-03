<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Person::class, "client_id");
    }

    public function doctor()
    {
        return $this->belongsTo(Person::class, "doctor_id");
    }
}
