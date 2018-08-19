<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Publication extends Model
{
    //
    protected $table = 'publications_users';

    protected $fillable = ['publication_text','url_image_publication'];


    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
