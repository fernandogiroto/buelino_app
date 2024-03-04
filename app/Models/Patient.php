<?php

namespace App\Models;

use App\Models\Clinic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'clinic_id',
        'name',
        'phone',
        'birthday',
        'responsible',
        'entry_date',
        'leaving_date',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
