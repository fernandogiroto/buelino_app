<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address'
    ];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
