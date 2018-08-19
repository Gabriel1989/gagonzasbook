<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FaceUser;

class FriendFace extends Model
{
    protected $table = 'friendsfacesusers';
    protected $primaryKey = 'user_id';

    public function faceuser()
    {
    	return $this->belongsTo(FaceUser::class,'id_facefriend');
    }
}
