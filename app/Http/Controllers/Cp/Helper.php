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
  public static function RedirectTo($url, $action, $table)
  {
      switch ($action) {
        case 'Insert':
          return redirect($url)->with('Status', 'Data'. $table . 'Berhasil ditambahkan ke database');
        break;
          case 'Update':
            return redirect($url)->with('Status', 'Data'. $table . 'Berhasil diubah dari database');
        break;
          case 'Delete':
            return redirect($url)->with('Status', 'Data'. $table . 'Berhasil dihapus dari database');
        break;  
          default:
        return false;
          break;
      }
    }

}