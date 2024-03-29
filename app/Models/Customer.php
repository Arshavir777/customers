<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'country_id',
        'profession',
        'years_in_profession'
    ];

    /**
     * Get the country that the customer belongs to.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
