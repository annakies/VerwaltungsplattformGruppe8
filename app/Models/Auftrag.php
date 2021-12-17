<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\Rolle;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Auftrag extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'auftrags_nr',
        'eingangsdatum',
        'abschlussdatum',
        'FAZ',
        'SEZ',
        'status',
        'kunden_nr',
        'adress_nr',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

        /**
         * Get the user that owns the Rolle
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function user(): BelongsTo
        {
            return $this->belongsTo(Adresse::class, 'adress_nr', 'adress_nr');
        }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
