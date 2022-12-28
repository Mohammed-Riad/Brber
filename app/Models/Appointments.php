<?php

namespace App\Models;

use App\Models\User;
use App\Models\Barber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointments extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function barber()
    {
        return $this->belongsTo(Barber::class);
    }
}
