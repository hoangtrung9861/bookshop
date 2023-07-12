<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles; // Add this

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles; // Add HasRoles

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'firstname',
        // 'lastname',
        // 'phone',
        // 'address',
        'name',
        'email',
        'password',
        'is_email_verified',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the books that the user has added to their wishlist.
     */
    public function wishlist()
    {
        return $this->belongsToMany(Book::class, 'wishlists');
    }
}
