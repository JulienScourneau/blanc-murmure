<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendees extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $fillable = [
        'last_name',
        'first_name',
        'email',
        'date_birth',
        'stage_id',
        'address',
        'postal_code',
        'city',
        'phone_number',
        'right_to_image'
    ];

    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }
}
