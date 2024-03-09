<?php

namespace App\Models;

use App\Models\Clinic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'name',
        'surname',
        'phone',
        'email',
        'birthday',
        'responsible',
        'entry_date',
        'leaving_date',
        'avatar',
        'description'
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
