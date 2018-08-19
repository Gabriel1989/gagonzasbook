<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class VisitUserface extends Model
{
    protected $table = 'visitsuserfacecount';
    protected $primaryKey = 'id_user';

    public function user()
    {
    	return $this->belongsTo(User::class,'id_user');
    }
}
