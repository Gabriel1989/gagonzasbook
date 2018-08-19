<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class FaceUser extends Model
{
    protected $table = 'face_user';
    protected $primaryKey = 'id_face';

    public function user()
    {
    	return $this->belongsTo(User::class, 'id_face');
    }

    public function friendsusers()
    {
    	return $this->belongsToMany(User::class,'friendsfacesusers')->withPivot('id_user', 'id_facefriend');
    }
}
