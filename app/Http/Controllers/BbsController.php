<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index(){
        $context = ['bbs'=>Bb::latest()->get()];
        return view('index',$context);
//        $bbs = Bb::latest()->get();
//        $s = "Объявления\r\n\r\n";
//        foreach ($bbs as $bb){
//            $s .= $bb->id . " " . $bb->title . " " . $bb->price . " руб. \r\n";
//            $s .= "\r\n";
//        }
//        return response($s)->header('Content-Type','text/plain');
    }
    public function detail(Bb $bb){
//        $bb = Bb::find($bb);
//        $s = $bb->title . " " . $bb->content . " " . $bb->price . " руб. \r\n";
//        return response($s)->header('Content-Type','text/plain');
        return view('detail', ['bb'=>$bb]);
    }
}
