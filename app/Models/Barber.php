<?php

namespace App\Models;

use App\Models\Reviews;
use App\Models\Appointments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barber extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shopeName',
        'phone',
        'description',
        'image',
        'address',
        'email',
        'yearsofexperience'
    ];


    // Filter By Status
    public function scopeFilter($query, array $filters)
    {
        if ($filters["search"] ?? false) {

            $category = Barber::where("name", "like", '%' .  $filters["search"] . '%')->first();

            if ($filters['search'] ?? false) {
                self::where(function () use ($query, $filters, $category) {
                    $query->where('name', 'like', '%' . $filters['search'] . '%')
                        ->orWhere('address', 'like', '%' . $filters['search'] . '%')
                        ->orWhere('shopeName', 'like', '%' . $filters['search'] . '%');
                });
            }
        }
    }


    public function appointments()
    {
        return $this->hasMany(Appointments::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    
}







