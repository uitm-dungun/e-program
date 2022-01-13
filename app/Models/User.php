<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function supporter()
    {
        return $this->hasOne(Supporter::class);
    }

    public function hasRoleName($role_name)
    {
        return $this->roleType->name == $role_name;
    }

    public function hasRoleType($role_type)
    {
        return $this->roleType->type == $role_type;
    }

    public function roleType()
    {
        return $this->belongsTo(RoleType::class);
    }

    public function scopeOfType($query, $type)
    {
        return $query->whereHas('roleType', function (Builder $query) use ($type) {
            $query->where('type', $type);
        });
    }

    public function scopeOfRole($query, $role_name)
    {
        return $query->whereHas('roleType', function (Builder $query) use ($role_name) {
            $query->where('name', $role_name);
        });
    }
}
