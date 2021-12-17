<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Adresse extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'adress_nr',
        'straße',
        'ortsname',
        'hausnummer',
        'plz'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

/**
 * Get all of the adresse for the Adresse
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function adresse(): HasMany
{
    return $this->hasMany(User::class, 'adress_nr', 'adress_nr');
}


}
