<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use vendor\autoload;


class JsonController extends Controller
{
   public function getJsonStory($id_user)
   {
     
     $debug = true;
     $truncatedDebug = false;
   	 $ig = new \InstagramAPI\Instagram($debug, $truncatedDebug, $storageConfig = []);

   	 $ig->login('gabonsio89','gabito89');
   	 $userId = $ig->story->getUserReelMediaFeed('$id_user');

   	 return $userId;

   }
}
