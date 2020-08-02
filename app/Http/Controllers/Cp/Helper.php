<?php

namespace App\Http\Controllers\Cp;

class Helper
{
  public static function removeUpload($path)
  {
    if(file_exists($path)){
      unlink($path);
    }
  }
  public static function RedirectTo($url, $msg)
  {
    return redirect($url)->with('status', $msg);
  }

}