<?php

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Portifolio extends Controller
{
//
static function createPortifolio($model,$id){
$item=$model->find($id);
if($item->portifolio=='false'){
$status='true';
}else{
$status='false';
}
$item->portifolio=$status;
$item->save();
return $item;
}



}
