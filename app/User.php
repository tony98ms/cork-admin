<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Scope para excluir al SuperAdmin
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */

    public function scopeNotSuperAdmin($query)
    {
        return $query->where('users.id', '!=', 1);
    }

    /**
     * Scope para buscar un usuario.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  string $search
     * @return \Illuminate\Database\Eloquent\Builder
     */

    public function scopeSearch($query, $search)
    {
        return $query->where(fn ($q) => $q->where('names', 'like', '%' . $search . '%')
            ->orWhere('username', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%'));
    }

    /**
     * Scope para buscar un usuario segun un rol.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  string $rol
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFindRole($query, $rol)
    {
        return $query->where(function ($query) use ($rol) {
            if ($rol !== '') {
                $query->role($rol);
            }
        });
    }
}
