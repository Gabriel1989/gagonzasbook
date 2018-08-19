<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Publication;
use App\FaceUser;
use App\VisitUserface;

class User extends Authenticatable
{
    use Notifiable;

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

    protected $table = 'users';

    public function publications()
    {
        return $this->hasMany(Publication::class, 'id_user');
    }

    public function faceuser()
    {
        return $this->hasOne(FaceUser::class, 'id_face','id');
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'friendsfacesusers', 'user_id', 'id_facefriend');

    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'friendsfacesusers', 'id_facefriend', 'user_id');
    }

    public function visitsFace()
    {
        return $this->hasOne(VisitUserface::class, 'id_user','id');
    }
}
