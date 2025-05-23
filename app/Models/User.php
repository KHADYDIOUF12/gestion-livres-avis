<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Retourner uniquement le nom et le mail.
     */
    public function getBasicInfoAttribute()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
